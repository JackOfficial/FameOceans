@extends('admin.layouts.app')

@section('title', 'Edit Partner Inquiry')

{{-- ================= HEADER ================= --}}
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Partner Inquiry</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.partnerships.index') }}">Partnerships</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.partnerships.show', $inquiry) }}">Inquiry #{{ $inquiry->id }}</a>
                    </li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- ================= CONTENT ================= --}}
<section class="content">

    {{-- Flash Messages --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show">
            <i class="fas fa-exclamation-triangle"></i> Please fix the validation errors below.
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    {{-- Action Bar --}}
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.partnerships.show', $inquiry) }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Back to Details
        </a>

        <div>
            <form action="{{ route('admin.partnerships.destroy', $inquiry) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Move this inquiry to trash?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">
                    <i class="fas fa-trash me-1"></i> Move to Trash
                </button>
            </form>
        </div>
    </div>

    <form action="{{ route('admin.partnerships.update', $inquiry) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Main Form Fields -->
            <div class="col-md-8">
                <div class="card card-outline card-primary shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title text-bold">
                            <i class="fas fa-edit me-2 text-primary"></i> Edit Inquiry Content
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Organization Name -->
                            <div class="col-md-6 form-group">
                                <label for="organization_name">Organization Name <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="organization_name" 
                                       id="organization_name" 
                                       class="form-control @error('organization_name') is-invalid @enderror" 
                                       value="{{ old('organization_name', $inquiry->organization_name) }}" 
                                       required>
                                @error('organization_name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Partnership Focus -->
                            <div class="col-md-6 form-group">
                                <label for="partnership_type">Partnership Focus <span class="text-danger">*</span></label>
                                <select name="partnership_type" id="partnership_type" class="form-control @error('partnership_type') is-invalid @enderror" required>
                                    <option value="corporate" {{ old('partnership_type', $inquiry->partnership_type) == 'corporate' ? 'selected' : '' }}>Corporate / Business Advisory</option>
                                    <option value="institutional" {{ old('partnership_type', $inquiry->partnership_type) == 'institutional' ? 'selected' : '' }}>Institutional / Public Sector</option>
                                    <option value="educational" {{ old('partnership_type', $inquiry->partnership_type) == 'educational' ? 'selected' : '' }}>Educational / Student Pathways</option>
                                    <option value="tech" {{ old('partnership_type', $inquiry->partnership_type) == 'tech' ? 'selected' : '' }}>Technology / HR Mobility Partner</option>
                                </select>
                                @error('partnership_type')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Proposed Collaboration Message -->
                        <div class="form-group">
                            <label for="message">Proposed Collaboration / Message</label>
                            <textarea name="message" 
                                      id="message" 
                                      rows="7" 
                                      class="form-control @error('message') is-invalid @enderror" 
                                      placeholder="Briefly describe proposed collaboration parameters...">{{ old('message', $inquiry->message) }}</textarea>
                            @error('message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                        <span class="text-muted small">Submitted on: {{ $inquiry->created_at->format('d M Y, H:i A') }}</span>
                        <div>
                            <a href="{{ route('admin.partnerships.show', $inquiry) }}" class="btn btn-default me-1">Cancel</a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact & Meta Sidebar -->
            <div class="col-md-4">
                <!-- Organization Details & Contact -->
                <div class="card card-outline card-info shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title text-bold">
                            <i class="fas fa-building me-2 text-info"></i> Contact Details
                        </h3>
                    </div>
                    <div class="card-body">
                        <!-- Contact Person -->
                        <div class="form-group">
                            <label for="contact_name">Contact Person <span class="text-danger">*</span></label>
                            <input type="text" 
                                   name="contact_name" 
                                   id="contact_name" 
                                   class="form-control @error('contact_name') is-invalid @enderror" 
                                   value="{{ old('contact_name', $inquiry->contact_name) }}" 
                                   required>
                            @error('contact_name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="email">Email Address <span class="text-danger">*</span></label>
                            <input type="email" 
                                   name="email" 
                                   id="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   value="{{ old('email', $inquiry->email) }}" 
                                   required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Phone / WhatsApp -->
                        <div class="form-group">
                            <label for="phone">Phone / WhatsApp</label>
                            <input type="text" 
                                   name="phone" 
                                   id="phone" 
                                   class="form-control @error('phone') is-invalid @enderror" 
                                   value="{{ old('phone', $inquiry->phone) }}">
                            @error('phone')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Location / Country -->
                        <div class="form-group">
                            <label for="country">Location / Country</label>
                            <input type="text" 
                                   name="country" 
                                   id="country" 
                                   class="form-control @error('country') is-invalid @enderror" 
                                   value="{{ old('country', $inquiry->country) }}">
                            @error('country')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <hr>

                        <!-- Organization Logo Upload -->
                        <div class="form-group mb-0">
                            <label for="logo">Organization Logo</label>
                            
                            <!-- Current Logo Display -->
                            <div class="text-center mb-3 p-3 bg-light rounded border">
                                @if($inquiry->logo)
                                    <img src="{{ asset('storage/' . $inquiry->logo) }}" 
                                         alt="{{ $inquiry->organization_name }}" 
                                         class="img-fluid rounded shadow-sm mb-2" 
                                         style="max-height: 80px; object-fit: contain;">
                                    <div class="small text-muted">Current Logo</div>
                                @else
                                    <div class="p-2 rounded bg-secondary bg-opacity-10 text-muted d-inline-block">
                                        <i class="fas fa-building fa-2x"></i>
                                    </div>
                                    <div class="small text-muted mt-1">No logo uploaded</div>
                                @endif
                            </div>

                            <input type="file" 
                                   name="logo" 
                                   id="logo" 
                                   class="form-control-file @error('logo') is-invalid @enderror" 
                                   accept="image/*">
                            <small class="form-text text-muted">Upload a new image to replace the current logo (PNG, JPG, WEBP, max 2MB).</small>
                            @error('logo')
                                <span class="text-danger small d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</section>
@endsection