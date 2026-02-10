@extends('admin.layouts.app')

@section('title', 'Blog Categories | FameOceans')

@section('content')
<div class="container-fluid">

    {{-- Header --}}
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h3 class="fw-bold mb-0">Blog Categories</h3>
            <small class="text-muted">Organize content with meaningful categories</small>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('admin.categories.trash') }}"
               class="btn btn-outline-danger">
                <i class="fas fa-trash"></i>
                <span class="d-none d-md-inline">Trash</span>
            </a>

            <a href="{{ route('admin.categories.create') }}"
               class="btn btn-primary">
                <i class="fas fa-plus"></i>
                New Category
            </a>
        </div>
    </div>

    {{-- Flash message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fas fa-check-circle me-1"></i>
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    {{-- Categories Card --}}
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0 table-hover">
                    <thead class="bg-light text-uppercase small">
                        <tr>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Created</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>
                                    <div class="fw-semibold">{{ $category->name }}</div>
                                    @if($category->description)
                                        <small class="text-muted d-block">
                                            {{ Str::limit($category->description, 60) }}
                                        </small>
                                    @endif
                                </td>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $category->slug }}
                                    </span>
                                </td>

                                <td class="text-muted">
                                    {{ $category->created_at->format('d M Y') }}
                                </td>

                                <td class="text-end">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.categories.edit', $category) }}"
                                           class="btn btn-sm btn-outline-warning"
                                           title="Edit">
                                            <i class="fas fa-pen"></i>
                                        </a>

                                        <form action="{{ route('admin.categories.destroy', $category) }}"
                                              method="POST"
                                              onsubmit="return confirm('Move this category to trash?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger"
                                                    title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            {{-- Empty State --}}
                            <tr>
                                <td colspan="4">
                                    <div class="text-center py-5">
                                        <i class="fas fa-folder-open fa-3x text-muted mb-3"></i>
                                        <h5 class="fw-bold">No Categories Yet</h5>
                                        <p class="text-muted mb-3">
                                            Create your first blog category to organize content.
                                        </p>
                                        <a href="{{ route('admin.categories.create') }}"
                                           class="btn btn-primary">
                                            <i class="fas fa-plus"></i> Create Category
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{-- Pagination --}}
    @if($categories->hasPages())
        <div class="d-flex justify-content-end mt-4">
            {{ $categories->links() }}
        </div>
    @endif

</div>
@endsection