<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeMail;
use App\Models\User;
use App\Models\Verifytoken;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'fullname' => 'required|string|max:55',
            'email' => 'required|string|lowercase|email|max:255|unique:' . User::class,
            'password' => 'required',
        ]);
        $validToken = rand(10, 100. . '2024');
        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'otp_code' => $validToken,
            'password' => Hash::make($request->password),
        ]);

        // $photo = $request->file('photo');
        // $slug = Str::slug($request->fullname, '-');

        // if ($photo) {
        //     $extension = $photo->getClientOriginalExtension();
        //     $fileNameToStore = $slug . '_' . time() . '.' . $extension; // Filename to store
        //     $destinationPath = 'files/profile_photo';
        //     $photo->move(public_path($destinationPath), $fileNameToStore);
        //     $user->photo = 'files/profile_photo/' . $fileNameToStore;
        // }
        // $user->assignRole('buyer');

        $user->save();

        Verifytoken::create([
            'token' => $validToken,
            'email' => $request->email,
        ]);

        $get_user_email = $request->email;
        $get_user_name = $request->fullname;
        Mail::to($request->email)->send(new WelcomeMail($get_user_email, $validToken, $get_user_name));

        return redirect('/verify-otp/' . $user->id);
    }
}
