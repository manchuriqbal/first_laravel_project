<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request){

        $path = $request->file('avater')->store('avatars', 'public');
        auth()->user()->update(['avater' => $path]);
        return redirect(route('profile.edit'));
    }
}

