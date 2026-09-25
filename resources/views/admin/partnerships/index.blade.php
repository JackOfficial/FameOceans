@extends('admin.layouts.app')

@section('title', 'Partner Inquiries')

{{-- ================= HEADER ================= --}}
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    Partner Inquiries
                    <small class="text-muted">({{ $inquiries->total() }} total)</small>
                </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Partner Inquiries</li>
                </ol>
            </div>
        </div>
    </div>
</section>

{{-- ================= CONTENT ================= --}}
<section class="content">

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    {{-- Action bar --}}
    <div class="d-flex justify-content-between mb-3">
        <a href="{{ route('admin.partnerships.trash') }}"
           class="btn btn-outline-danger btn-sm">
            <i class="fas fa-trash"></i> Trash
        </a>
    </div>

    {{-- Partner Inquiries Card --}}
    <div class="card card-outline card-primary">

        <div class="card-body p-0">

            <table class="table table-hover align-middle mb-0">
                <thead class="thead-light">
                    <tr>
                        <th width="60">Logo</th>
                        <th>Organization & Contact</th>
                        <th>Type & Location</th>
                        <th>Message</th>
                        <th>Received</th>
                        <th width="120" class="text-right">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($inquiries as $inquiry)
                        <tr>
                            <td>
                                @if($inquiry->logo)
                                    <img src="{{ asset('storage/' . $inquiry->logo) }}" 
                                         alt="{{ $inquiry->organization_name }}" 
                                         class="img-thumbnail rounded" 
                                         style="max-height: 40px; max-width: 50px; object-fit: contain;">
                                @else
                                    <span class="badge badge-light text-muted border">No Logo</span>
                                @endif
                            </td>

                            <td>
                                <strong>{{ $inquiry->organization_name }}</strong>
                                <div class="small text-muted">
                                    <i class="fas fa-user me-1"></i> {{ $inquiry->contact_name }}
                                </div>
                                <div class="small text-muted">
                                    <i class="fas fa-envelope me-1"></i> {{ $inquiry->email }}
                                    @if($inquiry->phone)
                                        | <i class="fas fa-phone me-1"></i> {{ $inquiry->phone }}
                                    @endif
                                </div>
                            </td>

                            <td>
                                <div>
                                    <span class="badge badge-info text-capitalize">
                                        {{ $inquiry->partnership_type }}
                                    </span>
                                </div>
                                @if($inquiry->country)
                                    <small class="text-muted"><i class="fas fa-globe me-1"></i> {{ $inquiry->country }}</small>
                                @endif
                            </td>

                            <td>
                                @if($inquiry->message)
                                    <span class="small text-muted">
                                        {{ Str::limit($inquiry->message, 70) }}
                                    </span>
                                @else
                                    <em class="small text-muted">No message provided</em>
                                @endif
                            </td>

                            <td class="text-muted small">
                                {{ $inquiry->created_at->format('d M Y') }}
                                <div class="text-xs">{{ $inquiry->created_at->format('H:i A') }}</div>
                            </td>

                            <td class="text-right">
                                <a href="{{ route('admin.partnerships.show', $inquiry) }}"
                                   class="btn btn-info btn-sm"
                                   title="View Details">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <form action="{{ route('admin.partnerships.destroy', $inquiry) }}"
                                      method="POST"
                                      class="d-inline"
                                      onsubmit="return confirm('Move this partner inquiry to trash?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center p-4 text-muted">
                                <i class="fas fa-handshake fa-2x mb-2"></i>
                                <div>No partner inquiries found.</div>
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>

    {{-- Pagination --}}
    @if($inquiries->hasPages())
        <div class="mt-3">
            {{ $inquiries->links() }}
        </div>
    @endif

</section>
@endsection