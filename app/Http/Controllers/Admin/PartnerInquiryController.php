<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerInquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PartnerInquiryController extends Controller
{
    /**
     * Display a listing of active partner inquiries.
     */
    public function index()
    {
        $inquiries = PartnerInquiry::latest()->paginate(15);

        return view('admin.partnerships.index', compact('inquiries'));
    }

    /**
     * Display the specified partner inquiry.
     */
    public function show(PartnerInquiry $partnership)
    {
        return view('admin.partnerships.show', [
            'inquiry' => $partnership,
        ]);
    }

    /**
     * Show the form for editing the specified partner inquiry.
     */
    public function edit(PartnerInquiry $partnership)
    {
        return view('admin.partnerships.edit', [
            'inquiry' => $partnership,
        ]);
    }

    /**
     * Update the specified partner inquiry in storage.
     */
    public function update(Request $request, PartnerInquiry $partnership)
    {
        $validatedData = $request->validate([
            'organization_name' => 'required|string|max:255',
            'contact_name'      => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'nullable|string|max:50',
            'partnership_type'  => 'required|in:corporate,institutional,educational,tech',
            'country'           => 'nullable|string|max:100',
            'logo'              => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
            'message'           => 'nullable|string|max:2000',
        ]);

        // Handle logo upload and replacement
        if ($request->hasFile('logo')) {
            // Remove old logo if it exists in public storage
            if ($partnership->logo && Storage::disk('public')->exists($partnership->logo)) {
                Storage::disk('public')->delete($partnership->logo);
            }

            // Store new logo
            $validatedData['logo'] = $request->file('logo')->store('partner_logos', 'public');
        }

        $partnership->update($validatedData);

        return redirect()
            ->route('admin.partnerships.show', $partnership)
            ->with('success', 'Partner inquiry updated successfully.');
    }

    /**
     * Soft-delete the specified partner inquiry.
     */
    public function destroy(PartnerInquiry $partnership)
    {
        $partnership->delete();

        return redirect()
            ->route('admin.partnerships.index')
            ->with('success', 'Partner inquiry moved to trash successfully.');
    }

    /**
     * Display a listing of soft-deleted partner inquiries.
     */
    public function trash()
    {
        $trashedInquiries = PartnerInquiry::onlyTrashed()->latest()->paginate(15);

        return view('admin.partnerships.trash', [
            'inquiries' => $trashedInquiries,
        ]);
    }

    /**
     * Restore a soft-deleted partner inquiry.
     */
    public function restore($id)
    {
        $inquiry = PartnerInquiry::onlyTrashed()->findOrFail($id);
        $inquiry->restore();

        return redirect()
            ->route('admin.partnerships.trash')
            ->with('success', 'Partner inquiry restored successfully.');
    }

    /**
     * Permanently delete a partner inquiry and remove its logo storage.
     */
    public function forceDelete($id)
    {
        $inquiry = PartnerInquiry::onlyTrashed()->findOrFail($id);

        // Delete uploaded logo file if exists
        if ($inquiry->logo && Storage::disk('public')->exists($inquiry->logo)) {
            Storage::disk('public')->delete($inquiry->logo);
        }

        $inquiry->forceDelete();

        return redirect()
            ->route('admin.partnerships.trash')
            ->with('success', 'Partner inquiry permanently deleted.');
    }
}