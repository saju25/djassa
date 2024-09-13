<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WebSocialLink;
use Illuminate\Http\Request;

class WebSocialLinkController extends Controller
{
    public function index()
    {
        $webSocialLinks = WebSocialLink::first();
        return view('admin.website-social-links', compact('webSocialLinks'));
    }

    public function update(Request $request, $id)
    {
        WebSocialLink::whereId($id)->update([
            'address' => $request->address,
            'number' => $request->number,
            'email' => $request->email,
        ]);
        toastr()->success('', 'Social links updated successfully!');
        return redirect()->back();
    }

    // user management

    public function userDelete($id)
    {
        User::whereId($id)->delete();
        toastr()->success('', 'User deleted successfully!');
        return redirect()->back();
    }
}
