<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminManageController extends Controller
{

    public function index()
    {
        $admins = Admin::latest()->get();

        return view('admin.admin_manage.index', compact('admins'));
    }

    public function create()
    {

        return view('admin.admin_manage.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        Admin::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        toastr()->success('', 'Admin created successfully!');
        return redirect()->route('admin.manages');
    }

    public function destroy($id)
    {

        $admin = Admin::find($id);
        $admin->delete();

        toastr()->success('', 'Admin deleted successfully!');
        return redirect()->route('admin.manages');
    }

    public function changePassword()
    {
        return view('admin.auth.change-password');
    }

    public function passwordChange(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $oldPass = $admin->password;
        $reqOldPass = $request->old_password;
        $newPassword = $request->password;
        $passwordConfirmation = $request->password_confirmation;

        if (Hash::check($reqOldPass, $oldPass)) {
            if ($newPassword === $passwordConfirmation) {
                $admin->password = Hash::make($newPassword);
                $admin->save();

                toastr()->success('', 'Password changed successfully!');
                return redirect()->back();
            } else {
                toastr()->error('', 'New password and confirmation password do not match!');
                return redirect()->back();
            }
        } else {
            toastr()->error('', 'Your old password does not match!');
            return redirect()->back();
        }

    }

    public function bannerView()
    {
        $banners = Banner::get();
        //dd($banners->all());

        return view('admin.admin_manage.banner-informaton', compact('banners'));
    }

    public function bannerCreatView()
    {

        return view('admin.admin_manage.banner-information-add');
    }
    public function bannerStore(Request $request)
    {
        //dd($request->all());
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable|url',
        ]);

// Handle file upload for the banner photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('banners', $fileName, 'public');
        }
        //  dd($filePath);

// Create a new banner record in the database
        $banner = new Banner();
        $banner->title = $validatedData['title'];
        $banner->sub_title = $validatedData['sub_title'];
        $banner->photo = $filePath ?? null; // Save the file path if the file was uploaded
        $banner->link = $validatedData['link'];
        $banner->save();

// Redirect back with success message
        return redirect()->route('admin.banner-in')->with('success', 'Banner created successfully!');

    }

    public function bannerDelet($id)
    {

        $banner = Banner::find($id);
        $banner->delete();

        toastr()->success('', 'Banner deleted successfully!');
        return redirect()->route('admin.banner-in');
    }

}
