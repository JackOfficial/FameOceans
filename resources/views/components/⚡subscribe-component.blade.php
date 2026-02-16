<?php

use Livewire\Component;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscribe;
use Livewire\Attributes\Validate;

new class extends Component
{
    #[Validate('required|email|unique:subscribes,email', message: 'This email is already on the voyage.')]
    public string $email = '';
    
    public bool $success = false;

    public function subscribe()
    {
        $this->validate();

        Subscribe::create(['email' => $this->email]);

        // Optional: Wrap in try-catch if mail server is unstable
        Mail::to($this->email)->send(new SubscriptionConfirmation());

        $this->success = true;
        
        // Trigger the Toastify event we added in layout.app
        $this->dispatch('toast', 
            message: 'Welcome aboard! Check your inbox.', 
            type: 'success'
        );

        $this->email = '';
    }
};
?>

<div class="newsletter-wrapper">
    <h5 class="text-white fw-bold mb-2">Join the Wave</h5>
    <p class="small mb-4" style="color: var(--muted);">Receive exclusive strategic insights and global opportunities directly in your inbox.</p>

    @if ($success)
        <div class="glass-alert p-3 rounded-4 d-flex align-items-center" 
             style="background: rgba(0, 224, 255, 0.1); border: 1px solid var(--accent); color: var(--accent);">
            <i class="fas fa-check-circle me-2"></i>
            <span class="small fw-medium">Successfully subscribed to the FameOceans fleet.</span>
        </div>
    @else
        <form wire:submit.prevent="subscribe" class="position-relative">
            <div class="input-group-custom d-flex align-items-center">
                <input
                    type="email"
                    wire:model="email"
                    class="glass-input flex-grow-1"
                    placeholder="Enter your professional email"
                    required
                >
                <button type="submit" class="subscribe-btn" wire:loading.attr="disabled">
                    <span wire:loading.remove>Subscribe</span>
                    <span wire:loading><i class="fas fa-circle-notch fa-spin"></i></span>
                </button>
            </div>

            @error('email')
                <div class="position-absolute start-0 mt-2">
                    <small class="text-accent" style="color: #ff4d4d; font-size: 11px; letter-spacing: 0.5px;">
                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                    </small>
                </div>
            @enderror
        </form>
    @endif

    <style>
        .newsletter-wrapper {
            max-width: 400px;
        }

        .input-group-custom {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            padding: 5px 5px 5px 20px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .input-group-custom:focus-within {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.07);
            box-shadow: 0 0 20px rgba(0, 224, 255, 0.15);
        }

        .glass-input {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 14px;
            outline: none;
            width: 100%;
        }

        .glass-input::placeholder {
            color: rgba(227, 233, 255, 0.4);
        }

        .subscribe-btn {
            background: var(--accent);
            color: var(--deep);
            border: none;
            border-radius: 50px;
            padding: 10px 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .subscribe-btn:hover {
            transform: scale(1.03);
            background: #fff;
            box-shadow: 0 5px 15px rgba(0, 224, 255, 0.3);
        }

        .subscribe-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }

        .text-accent {
            animation: fadeIn 0.3s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</div>