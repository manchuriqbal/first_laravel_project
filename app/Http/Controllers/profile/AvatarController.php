<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateAvatarRequest;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request){

        $path = Storage::disk('public')->put('avatars', $request->file('avater'));;

        if ($old_avatar = $request->user()->avater) {
            Storage::disk('public')->delete($old_avatar);
        }
        auth()->user()->update(['avater' => $path]);
        return redirect(route('profile.edit'));
    }
}

