<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\CompanyInFo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->name = $request->user()->fullname;

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('admin.profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::guard('admin')->logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/admin/login');
    }

    public function indexCom()
    {
        $comIns = CompanyInFo::get();
        return view('admin.admin_manage.company', compact('comIns'));
    }
    public function formViewCom()
    {
        return view('admin.admin_manage.company-info-add');
    }
    public function inStoreCom(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15|unique:company_in_fos,phone',
            'email' => 'required|email|max:255|unique:company_in_fos,email',
            'location' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Photo validation
        ]);
        $photoPath = null;
        if ($request->hasFile('photo')) {
            // Store the photo in the 'public/photos' directory
            $photoPath = $request->file('photo')->store('photos', 'public');
        }
        CompanyInFo::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'details' => $request->details,
            'photo' => $photoPath,
        ]);
        return redirect()->route('admin.company.index')->with('success', 'Company added successfully!');

    }
    public function comInDestroy($id)
    {
        // Find the delivery company by its ID
        $company = CompanyInFo::findOrFail($id);

        // Delete the associated photo from storage if it exists
        if ($company->photo && Storage::disk('public')->exists($company->photo)) {
            Storage::disk('public')->delete($company->photo);
        }

        // Delete the delivery company record from the database
        $company->delete();

        // Redirect or return a response
        return redirect()->route('admin.delivery-company-info')->with('success', 'Company deleted successfully!');
    }

    public function comInUpdateView($id)
    {
        $comIns = CompanyInFo::findOrFail($id);
        return view('admin.admin_manage.company-info-edit', compact('comIns'));
    }
    public function comInUpdate(Request $request, $id)
    {
        // Validate the request data, including the 'details' field
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric|digits_between:10,15|unique:company_in_fos,phone,' . $id,
            'email' => 'required|email|max:255|unique:company_in_fos,email,' . $id,
            'location' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'nullable|string', // Add validation rule for the 'details' field
        ]);

        // Find the company info by its ID
        $companyInfo = CompanyInFo::findOrFail($id);

        // Handle photo upload and updating
        $photoPath = $companyInfo->photo; // Keep the old photo path by default
        if ($request->hasFile('photo')) {
            // Delete the old photo if it exists
            if ($companyInfo->photo) {
                Storage::disk('public')->delete($companyInfo->photo);
            }
            // Store the new photo in the 'public/photos' directory
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Update the company info with the new data, including 'details'
        $companyInfo->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'location' => $request->location,
            'photo' => $photoPath,
            'details' => $request->details, // Ensure the 'details' field is being updated
        ]);

        return redirect()->route('admin.company.index')->with('success', 'Company information updated successfully!');
    }

}
