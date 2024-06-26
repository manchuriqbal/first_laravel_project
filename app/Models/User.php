<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Replie;
use App\Models\Ticket;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avater',
        'password',
    ];
    // protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected function name(): Attribute {
        return Attribute::make(
            get: fn ($value) => Str::upper($value)
        );
    }

    protected function isAdmin(): Attribute {

        $admins = ['manchur.fiverr@gmail.com'];
        return Attribute::make(
            get: fn() => in_array($this->email, $admins)
        );
    }
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function replies(): HasMany
    {
        return $this->hasMany(Replie::class);
    }


}
