<?php

use Livewire\Component;
use App\Models\Contact;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

new class extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Save to database
        $contact = Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        // Send email to admin (mail.from.address)
        Mail::to(config('musengimanajacques@gmail.com'))->send(new ContactMessageMail($contact));

        // Reset fields
        $this->reset(['name', 'email', 'subject', 'message']);

        // Notify user
        session()->flash('success', 'Message sent successfully! We will get back to you soon.');
    }
};
?>

<div class="glass-card p-4">

    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">

        <div class="row g-3">

            <div class="col-md-6">
                <input type="text" wire:model.defer="name" class="form-control rounded-pill" placeholder="Your Name" required>
                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-md-6">
                <input type="email" wire:model.defer="email" class="form-control rounded-pill" placeholder="Your Email" required>
                @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <input type="text" wire:model.defer="subject" class="form-control rounded-pill" placeholder="Subject">
                @error('subject') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <textarea wire:model.defer="message" rows="5" class="form-control rounded-4" placeholder="Your Message" required></textarea>
                @error('message') <span class="text-danger small">{{ $message }}</span> @enderror
            </div>

            <div class="col-12 text-end">
    <button type="submit" class="btn btn-primary px-5 py-3 shadow-lg" wire:loading.attr="disabled">
        <!-- Show spinner while submitting -->
        <span wire:loading class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
        
        <i class="fas fa-paper-plane me-2"></i>
        <span wire:loading.remove>Send Message</span>
        <span wire:loading>Sending...</span>
    </button>
</div>


        </div>
    </form>

</div>
