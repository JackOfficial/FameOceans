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