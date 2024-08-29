<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Attempt to find the user by email or phone number
        $user = User::query()
            ->where('email', $request->loginname)
            ->orWhere('phone', $request->loginname)
            ->first();

        // Check if a user was found
        if ($user) {
            // Check if the user is activated
            if ($user->is_activated == 1) {
                // Authenticate the user
                $request->authenticate();

                // Regenerate session
                $request->session()->regenerate();

                // Redirect to home
                return redirect()->to('/');
            } else {
                // Notify the user to verify OTP
                toastr()->error('', "Your email is not an OTP, please check your email OTP first");

                // Redirect to OTP verification page
                return redirect('/verify-otp/' . $user->id);
            }
        } else {
            // Notify the user about incorrect email or password
            toastr()->error('', 'Your email and password do not match !');

            // Redirect back with error message
            return redirect()->route('register');
        }
    }
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
