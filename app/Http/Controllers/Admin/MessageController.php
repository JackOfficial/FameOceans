<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function inbox()
 {
    $messages = Contact::orderBy('created_at', 'desc')
                       ->paginate(10);

    return view('admin.messages.inbox', compact('messages'));
 }

 /**
     * Display a single message.
     */
    public function read($id)
    {
        $message = Contact::findOrFail($id);

        return view('admin.messages.read', compact('message'));
    }

    /**
     * Delete a single message.
     */
    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.messages.inbox')
                         ->with('success', 'Message deleted successfully.');
    }
}
