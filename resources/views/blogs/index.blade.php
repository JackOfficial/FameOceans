@extends('layouts.app')

@section('content')

<div class="container-fluid mt-4 pt-5">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-dark bg-opacity-25 mb-30 p-3 rounded" style="backdrop-filter: blur(10px);">
                <a class="breadcrumb-item text-accent text-decoration-none" href="/">Home</a>
                <span class="breadcrumb-item active text-white">Blog</span>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row px-xl-5">

        <div class="col-lg-3 col-md-4">

            <div class="glass-card p-4 mb-30 border-0 shadow-sm" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px);">
                <h5 class="section-title position-relative text-uppercase mb-3 text-white">
                    <span class="pr-3">Search</span>
                </h5>
                <form action="{{ route('post.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control bg-transparent text-white border-secondary" placeholder="Search insights..." value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-outline-accent" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="glass-card p-4 mb-30 border-0 shadow-sm" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px);">
                <h5 class="section-title position-relative text-uppercase mb-3 text-white">
                    <span class="pr-3">Categories</span>
                </h5>
                <ul class="list-unstyled mb-0">
                    @foreach($categories as $category)
                    <li class="d-flex justify-content-between align-items-center mb-3">
                        <a class="text-white-50 text-decoration-none hover-accent" href="{{ route('post.category', $category->slug) }}">
                            {{ $category->name }}
                        </a>
                        <span class="badge border border-secondary text-muted font-weight-normal">{{ $category->posts_count ?? '0' }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="glass-card p-4 mb-30 border-0 shadow-sm" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px);">
                <h5 class="section-title position-relative text-uppercase mb-3 text-white">
                    <span class="pr-3">Recent Posts</span>
                </h5>

                @foreach ($recent_posts as $recent)
                <div class="media mb-3 d-flex">
                    <img src="{{ $recent->featured_image ? asset('storage/'.$recent->featured_image) : asset('images/placeholder.jpg') }}" 
                         class="mr-3 rounded" style="width: 70px; height: 50px; object-fit: cover;">
                    <div class="media-body ms-3">
                        <a class="text-white text-decoration-none" href="{{ route('post.show', $recent->slug) }}">
                            <h6 class="mt-0 text-truncate small">{{ Str::limit($recent->title, 20) }}</h6>
                        </a>
                        <small class="text-muted" style="font-size: 11px;">
                            <i class="fa fa-calendar text-accent me-1"></i> {{ $recent->published_at?->format('d M, Y') }}
                        </small>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="col-lg-9 col-md-8">
            <div class="row pb-3">

                @forelse ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-6 pb-4">
                    <div class="glass-card mb-4 shadow-sm h-100 border-0 overflow-hidden" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); transition: 0.3s;">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" 
                                 src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/placeholder.jpg') }}" 
                                 alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
                        </div>
                        <div class="p-4">
                            <a class="h6 text-decoration-none d-block blog-card-title mb-2 text-white hover-accent" href="{{ route('post.show', $post->slug) }}">
                                {{ $post->title }}
                            </a>
                            <p class="text-muted mb-3" style="font-size: 13px; line-height:1.6;">
                                {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 90) }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-auto pt-2 border-top border-secondary">
                                <small class="text-muted" style="font-size: 11px;">
                                    <i class="fa fa-calendar text-accent me-1"></i> {{ $post->published_at?->format('M d, Y') }}
                                </small>
                                <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-outline-accent py-1 px-2" style="font-size: 11px;">
                                    Read More <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <h4 class="text-muted">No posts found.</h4>
                </div>
                @endforelse

                <div class="col-12 mt-4">
                    <div class="d-flex justify-content-center">
                        {{ $posts->links() }}
                    </div>
                </div>

            </div>
        </div>
        </div>
</div>
<style>
    .text-accent { color: var(--accent) !important; }
    .btn-outline-accent { color: var(--accent); border-color: var(--accent); }
    .btn-outline-accent:hover { background-color: var(--accent); color: #000; }
    .hover-accent:hover { color: var(--accent) !important; }

    .blog-card-title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: 0.3s;
    }

    .glass-card:hover {
        transform: translateY(-5px);
        background: rgba(255,255,255,0.06) !important;
        box-shadow: 0 10px 20px rgba(0,0,0,0.3) !important;
    }

    /* Override Laravel Pagination to match theme */
    .pagination .page-link { background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1); color: #fff; }
    .pagination .page-item.active .page-link { background: var(--accent); border-color: var(--accent); color: #000; }
</style>

@endsection