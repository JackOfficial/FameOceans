<?php

use Livewire\Component;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscribe;

new class extends Component
{
    public string $email = '';
    public bool $success = false;

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email',
        ]);

        Subscribe::create([
            'email' => $this->email,
        ]);

        Mail::to($this->email)->send(
         new SubscriptionConfirmation()
        );

        $this->success = true;
        $this->email = '';
    }
};
?>

<div class="col-md-4">
    <h5>Join the Wave</h5>
    <p>Subscribe for updates and opportunities.</p>

    @if ($success)
        <div class="alert alert-success rounded-4 py-2">
            🎉 Thanks for subscribing!
        </div>
    @else
        <form wire:submit.prevent="subscribe" class="d-flex">
            <input
                type="email"
                wire:model.defer="email"
                class="form-control me-2 rounded-pill"
                placeholder="Your email"
            >

           <button class="btn btn-primary rounded-pill" wire:loading.attr="disabled">
    <span wire:loading.remove>
        <i class="fas fa-paper-plane"></i>
    </span>
    <span wire:loading>
        <i class="fas fa-spinner fa-spin"></i>
    </span>
</button>
        </form>

        @error('email')
            <small class="text-danger d-block mt-2">
                {{ $message }}
            </small>
        @enderror
    @endif
</div>
