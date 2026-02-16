@extends('layouts.app')

@section('content')
<div class="blog-container" style="background: var(--deep); color: #fff; padding-top: 120px;">
    <div class="container">
        
        {{-- 1. HEADER SECTION --}}
        <div class="row align-items-end mb-5">
            <div class="col-lg-8">
                <h6 class="text-accent text-uppercase fw-bold mb-2" style="letter-spacing: 3px;">The Intelligence Feed</h6>
                <h1 class="display-3 fw-bold">Ocean Insights</h1>
            </div>
            <div class="col-lg-4 text-lg-end">
                <p class="text-muted small">Navigating market depths with <br>precision and clarity.</p>
            </div>
        </div>

        <hr class="border-white border-opacity-10 mb-5">

        {{-- 2. FEATURED POST (The Big Catch) --}}
        @if($posts->first())
        @php $featured = $posts->first(); @endphp
        <div class="row mb-5 pb-5">
            <div class="col-12">
                <a href="{{ route('blog.show', $featured->slug) }}" class="text-decoration-none group">
                    <div class="row g-0 align-items-center">
                        <div class="col-lg-7">
                            <div class="overflow-hidden rounded-start-4">
                                <img src="{{ asset('storage/'.$featured->featured_image) }}" class="img-fluid featured-img" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-5 bg-white bg-opacity-5 rounded-end-4 h-100 border-start-0" style="border: 1px solid rgba(255,255,255,0.1);">
                                <span class="badge bg-accent text-dark mb-3">LATEST REPORT</span>
                                <h2 class="display-6 fw-bold text-white mb-3 group-hover-accent">{{ $featured->title }}</h2>
                                <p class="text-muted mb-4">{{ Str::limit($featured->excerpt, 180) }}</p>
                                <div class="d-flex align-items-center">
                                    <div class="ms-0">
                                        <p class="mb-0 small fw-bold">{{ $featured->author->name }}</p>
                                        <p class="mb-0 extra-small text-muted">{{ $featured->published_at->format('M d, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endif

        {{-- 3. THE "MINIMALIST" GRID --}}
        <div class="row g-5">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-6">
                <article class="post-item pb-4 border-bottom border-white border-opacity-10 h-100">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('storage/'.$post->featured_image) }}" class="img-fluid rounded-3" style="aspect-ratio: 1/1; object-fit: cover;" alt="">
                        </div>
                        <div class="col-8">
                            <small class="text-accent fw-bold">{{ $post->category->name ?? 'Update' }}</small>
                            <h4 class="mt-2 text-white fw-bold">
                                <a href="{{ route('blog.show', $post->slug) }}" class="text-white text-decoration-none hover-link">
                                    {{ $post->title }}
                                </a>
                            </h4>
                            <p class="text-muted small mt-2">{{ $post->published_at->format('M d, Y') }}</p>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>

        {{-- PAGINATION --}}
        <div class="py-5">
            {{ $posts->links() }}
        </div>
    </div>
</div>

<style>
    .text-accent { color: var(--accent) !important; }
    .featured-img { 
        transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1); 
        width: 100%; height: 450px; object-fit: cover;
    }
    .group:hover .featured-img { transform: scale(1.05); }
    .group-hover-accent { transition: color 0.3s ease; }
    .group:hover .group-hover-accent { color: var(--accent) !important; }
    .hover-link:hover { color: var(--accent) !important; }
    .extra-small { font-size: 0.7rem; }
</style>
@endsection