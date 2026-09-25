<?php

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\PartnerInquiry;

new class extends Component
{
    use WithFileUploads;

    public $organization_name = '';
    public $contact_name = '';
    public $email = '';
    public $phone = '';
    public $partnership_type = 'corporate';
    public $country = '';
    public $logo;
    public $message = '';

    public $isSubmitted = false;

    protected $rules = [
        'organization_name' => 'required|string|max:255',
        'contact_name'      => 'required|string|max:255',
        'email'             => 'required|email|max:255',
        'phone'             => 'nullable|string|max:50',
        'partnership_type'  => 'required|in:corporate,institutional,educational,tech',
        'country'           => 'nullable|string|max:100',
        'logo'              => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:2048',
        'message'           => 'nullable|string|max:2000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        if ($this->logo) {
            $validatedData['logo'] = $this->logo->store('partner_logos', 'public');
        }

        PartnerInquiry::create($validatedData);

        $this->reset(['organization_name', 'contact_name', 'email', 'phone', 'partnership_type', 'country', 'logo', 'message']);

        $this->isSubmitted = true;
    }
};
?>

<div class="glass-card p-4 p-md-5 border border-white border-opacity-10 shadow-2xl" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(15px); border-radius: 25px;">
    <h4 class="fw-bold text-white mb-3">Partner Inquiry</h4>
    <p class="small mb-4" style="color: rgba(227,233,255,0.7);">
        Interested in exploring joint opportunities? Connect with our strategic partnerships team.
    </p>

    @if($isSubmitted)
        <div class="alert alert-success bg-success bg-opacity-25 text-white border-0 rounded-3 mb-4 p-3 d-flex align-items-center gap-2">
            <i class="fas fa-check-circle fa-lg"></i>
            <div>
                <strong>Thank you!</strong> Your partner inquiry has been submitted successfully. We will get back to you shortly.
            </div>
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="row g-3">
            <!-- Organization Name -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Organization Name *</label>
                <input type="text" wire:model.blur="organization_name" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('organization_name') is-invalid @enderror" placeholder="e.g. Acme Ltd or University Name">
                @error('organization_name') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Contact Name -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Contact Name *</label>
                <input type="text" wire:model.blur="contact_name" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('contact_name') is-invalid @enderror" placeholder="e.g. John Doe">
                @error('contact_name') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Work Email -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Work Email *</label>
                <input type="email" wire:model.blur="email" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('email') is-invalid @enderror" placeholder="john@company.com">
                @error('email') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Phone / WhatsApp -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Phone / WhatsApp</label>
                <input type="tel" wire:model.blur="phone" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('phone') is-invalid @enderror" placeholder="+250 780 000 000">
                @error('phone') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Partnership Focus -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Partnership Focus</label>
                <select wire:model="partnership_type" class="form-select bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('partnership_type') is-invalid @enderror">
                    <option value="corporate">Corporate / Business Advisory</option>
                    <option value="institutional">Institutional / Public Sector</option>
                    <option value="educational">Educational / Student Pathways</option>
                    <option value="tech">Technology / HR Mobility Partner</option>
                </select>
                @error('partnership_type') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Country / Location -->
            <div class="col-md-6">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Country / Location</label>
                <input type="text" wire:model.blur="country" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('country') is-invalid @enderror" placeholder="e.g. Rwanda, Romania, UAE">
                @error('country') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Company Logo Upload -->
            <div class="col-12">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Company Logo (Optional)</label>
                <input type="file" wire:model="logo" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('logo') is-invalid @enderror" accept="image/*">
                
                <!-- Live Preview & Loading State -->
                <div wire:loading wire:target="logo" class="text-info small mt-1">
                    <i class="fas fa-spinner fa-spin me-1"></i> Uploading logo preview...
                </div>
                
                @if ($logo && !$errors->has('logo'))
                    <div class="mt-2 d-flex align-items-center gap-2">
                        <span class="small text-light-50">Preview:</span>
                        <img src="{{ $logo->temporaryUrl() }}" class="rounded border border-white border-opacity-10" style="height: 40px; object-fit: contain; background: #fff; padding: 2px;">
                    </div>
                @endif

                @error('logo') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Message -->
            <div class="col-12">
                <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">How can we collaborate?</label>
                <textarea wire:model.blur="message" rows="3" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3 @error('message') is-invalid @enderror" placeholder="Briefly describe your organization's goals or proposed project..."></textarea>
                @error('message') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
            </div>

            <!-- Submit Button -->
            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 shadow-lg transform-scale mt-2 fw-bold" wire:loading.attr="disabled">
                    <span wire:loading.remove wire:target="submit">
                        Submit Partner Inquiry <i class="fas fa-arrow-right ms-2"></i>
                    </span>
                    <span wire:loading wire:target="submit">
                        <i class="fas fa-spinner fa-spin me-2"></i> Submitting...
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>