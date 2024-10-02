<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Drivers\Imagick\Driver;
use Intervention\Image\ImageManager;

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

        // dd(phpinfo());
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            // 'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic,heif|max:4072',
            'link' => 'nullable|url',
        ]);

// Handle file upload for the banner photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $manager = new ImageManager(new Driver());
            $fileName = time() . '_' . '.png';
            $image = $manager->read($file);
            $image->toPng(indexed: true)->save(base_path('public/banners/' . $fileName));
            $filePath = $fileName;
        }

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

    public function bannerEdit($id)
    {
        // Find the banner by ID
        $banner = Banner::findOrFail($id);

        // Return the edit view with the banner data
        return view('admin.admin_manage.banner-edit', compact('banner'));
    }

    public function bannerUpdate(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            //'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'nullable|url',
        ]);

        // Find the banner by ID
        $banner = Banner::findOrFail($id);

        // Update the banner's attributes
        $banner->title = $validatedData['title'];
        $banner->sub_title = $validatedData['sub_title'];
        $banner->link = $validatedData['link'];

        // Handle file upload for the banner photo

        if ($request->hasFile('photo')) {
            // Delete the old photo if necessary (optional)
            if ($banner->photo) {
                $filePath = public_path('banners/' . $banner->photo);
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $file = $request->file('photo');
            $manager = new ImageManager(new Driver());
            $fileName = time() . '_' . '.png';
            $image = $manager->read($file);
            $image->toPng(indexed: true)->save(base_path('public/banners/' . $fileName));
            $filePath = $fileName;
            $banner->photo = $filePath; // Update the photo path
        }

        // Save the updated banner
        $banner->save();

        // Redirect back with success message
        return redirect()->route('admin.banner-in')->with('success', 'Banner updated successfully!');
    }

    public function bannerDelete($id)
    {
        // Find the banner by ID
        $banner = Banner::findOrFail($id);

        // Check if the banner has an associated photo
        if ($banner->photo) {
            $filePath = public_path('banners/' . $banner->photo);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete the banner from the database
        $banner->delete();

        // Redirect back with a success message
        return redirect()->route('admin.banner-in')->with('success', 'Banner deleted successfully!');
    }

}
