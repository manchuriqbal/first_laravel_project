<?php

namespace App\Http\Controllers\profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAvatarRequest;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request){
        dd($request->all());
        return redirect(route('profile.edit'));
    }
}

