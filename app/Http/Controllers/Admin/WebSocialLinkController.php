<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeliveryCompany;
use App\Models\User;
use App\Models\WebSocialLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function deliveryIndex()
    {
        $webSocialLinks = WebSocialLink::first();
        return view('admin.delivery-company', compact('webSocialLinks'));
    }
    public function delInfoIndex()
    {
        $dcompays = DeliveryCompany::get();
        return view('admin.delivery-compay-index', compact('dcompays'));
    }
    public function deliveryStore(Request $request)
    {

        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15|unique:delivery_companies,phone',
            'email' => 'required|email|max:255|unique:delivery_companies,email',
            'location' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Photo validation
        ]);

// Handle the photo upload
        $photoPath = null;
        if ($request->hasFile('photo')) {
            // Store the photo in the 'public/photos' directory
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

// Create a new delivery company record
        DeliveryCompany::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'photo' => $photoPath,
        ]);

        // Redirect or return a response
        return redirect()->route('admin.delivery-company-info')->with('success', 'Company added successfully!');
    }
    public function deliveryDestroy($id)
    {
        // Find the delivery company by its ID
        $company = DeliveryCompany::findOrFail($id);

        // Delete the associated photo from storage if it exists
        if ($company->photo && Storage::disk('public')->exists($company->photo)) {
            Storage::disk('public')->delete($company->photo);
        }

        // Delete the delivery company record from the database
        $company->delete();

        // Redirect or return a response
        return redirect()->route('admin.delivery-company-info')->with('success', 'Company deleted successfully!');
    }

}
