<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class AdressController extends Controller
{
    public function updateUserInfo(Request $request)
    {
        $request->validate([
            'photo' => 'nullable|image',
            'cover_photo' => 'nullable|image',
        ]);

        $userinfo = User::where('id', Auth::user()->id)->first();

        $photo = $request->file('photo');
        $slug = Str::slug($request->fullname, '-');

        if ($photo) {

            $extension = $photo->getClientOriginalExtension();
            $fileNameToStore = $slug . '_' . time() . '.' . $extension; // Filename to store
            $destinationPath = 'files/profile_photo';
            $photo->move(public_path($destinationPath), $fileNameToStore);
            $userinfo->photo = 'files/profile_photo/' . $fileNameToStore;
        }
        $cover_photo = $request->file('cover_photo');
        $slug = Str::slug($request->fullname, '-');

        if ($cover_photo) {

            $extension = $cover_photo->getClientOriginalExtension();
            $fileNameToStore = $slug . '_' . time() . '.' . $extension; // Filename to store
            $destinationPath = 'files/cover_photo';
            $cover_photo->move(public_path($destinationPath), $fileNameToStore);
            $userinfo->cover_photo = 'files/cover_photo/' . $fileNameToStore;
        }

        $userinfo->save();

        return redirect()->back();
    }
}
