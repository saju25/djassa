<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use \Carbon\Carbon;

class SubController extends Controller
{
    public function index()
    {
        return view('user.profile.sub');
    }

    public function sub($id)
    {
        $update = Auth::user();
        $update->sub_id = $id;
        $update->sub_date = Carbon::today();
        $update->update();

        return redirect()->route('user.dashboard');
    }

    public function success(Request $request)
    {
        $user = Auth::user();

        if ($request->amount > 2000 && $request->amount < 10000) {
            $user->sub_id = 1;
            $user->sub_date = Carbon::now();
        }
        if ($request->amount > 10000 && $request->amount < 20000) {
            $user->sub_id = 2;
            $user->sub_date = Carbon::now();
        }
        if ($request->amount > 20000 && $request->amount < 30000) {
            $user->sub_id = 3;
            $user->sub_date = Carbon::now();
        }

        $user->save();

        toastr()->success('', 'You have successfully registered!');

        return redirect()->route('home');
    }

    public function fail(Request $request)
    {
        toastr()->success("", "Invalid credentials provided for payment!");
        return redirect(route('user.sub'));
    }
}
