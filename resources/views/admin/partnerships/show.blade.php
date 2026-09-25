@extends('admin.layouts.app')

@section('title', 'Partner Inquiry Details')

{{-- ================= HEADER ================= --}}
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Partner Inquiry Details
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.partnerships.index') }}">Partnerships</a>
                    </li>
                    <li class="breadcrumb-item active">Inquiry #{{ $inquiry->id }}</li>
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

    {{-- Action Bar --}}
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <a href="{{ route('admin.partnerships.index') }}" class="btn btn-outline-secondary btn-sm">
            <i class="fas fa-arrow-left me-1"></i> Back to Inquiries
        </a>

        <div>
            <a href="mailto:{{ $inquiry->email }}?subject=Re: Partnership Inquiry - {{ urlencode($inquiry->organization_name) }}" 
               class="btn btn-primary btn-sm me-1">
                <i class="fas fa-reply me-1"></i> Reply via Email
            </a>

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

    <div class="row">
        <!-- Main Inquiry Content -->
        <div class="col-md-8">
            <div class="card card-outline card-primary shadow-sm">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        <i class="fas fa-align-left me-2 text-primary"></i>
                        Proposed Collaboration / Message
                    </h3>
                </div>
                <div class="card-body">
                    @if($inquiry->message)
                        <div class="p-3 bg-light rounded border text-dark" style="font-size: 1.05rem; line-height: 1.7; white-space: pre-wrap;">
                            {{ $inquiry->message }}
                        </div>
                    @else
                        <div class="text-center p-4 text-muted border rounded bg-light">
                            <i class="fas fa-info-circle fa-2x mb-2 text-secondary"></i>
                            <div>No detailed message was included with this inquiry.</div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Meta Sidebar -->
        <div class="col-md-4">
            <!-- Organization Info Card -->
            <div class="card card-outline card-info shadow-sm">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        <i class="fas fa-building me-2 text-info"></i> Organization Overview
                    </h3>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4 p-3 bg-light rounded border">
                        @if($inquiry->logo)
                            <img src="{{ asset('storage/' . $inquiry->logo) }}" 
                                 alt="{{ $inquiry->organization_name }}" 
                                 class="img-fluid rounded shadow-sm mb-2" 
                                 style="max-height: 90px; object-fit: contain;">
                        @else
                            <div class="p-3 rounded bg-secondary bg-opacity-10 text-muted d-inline-block">
                                <i class="fas fa-building fa-3x"></i>
                            </div>
                        @endif
                        <h4 class="mt-2 font-weight-bold text-dark mb-0">{{ $inquiry->organization_name }}</h4>
                        <span class="badge badge-info text-capitalize mt-1 px-3 py-1">
                            {{ $inquiry->partnership_type }}
                        </span>
                    </div>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-user me-2"></i> Contact Person</span>
                            <span class="font-weight-bold text-dark">{{ $inquiry->contact_name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-envelope me-2"></i> Email Address</span>
                            <a href="mailto:{{ $inquiry->email }}" class="font-weight-bold text-primary">{{ $inquiry->email }}</a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-phone me-2"></i> Phone / WhatsApp</span>
                            <span class="font-weight-bold text-dark">{{ $inquiry->phone ?? 'N/A' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-globe me-2"></i> Location / Country</span>
                            <span class="font-weight-bold text-dark">{{ $inquiry->country ?? 'Not Specified' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span class="text-muted"><i class="fas fa-calendar-alt me-2"></i> Submitted Date</span>
                            <span class="text-dark">{{ $inquiry->created_at->format('d M Y, H:i A') }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection