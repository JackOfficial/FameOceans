@extends('layouts.app')

@section('content')
<section class="post-hero position-relative overflow-hidden" style="padding: 120px 0 80px; background: var(--deep);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                {{-- Category & Date --}}
                <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-2 text-uppercase" style="background: var(--accent); color: var(--deep); letter-spacing: 1px; font-size: 0.7rem;">
                        {{ $post->category->name }}
                    </span>
                    <span class="text-muted ms-3 small"><i class="far fa-calendar-alt me-1"></i> {{ $post->published_at->format('M d, Y') }}</span>
                </div>

                {{-- Title --}}
                <h1 class="display-4 fw-bold text-white mb-4" style="line-height: 1.2;">{{ $post->title }}</h1>

                {{-- Author Info --}}
                <div class="d-flex align-items-center justify-content-center mb-5">
                    <div class="rounded-circle bg-accent d-flex align-items-center justify-content-center text-dark fw-bold me-2" style="width: 40px; height: 40px;">
                        {{ substr($post->author->name ?? 'F', 0, 1) }}
                    </div>
                    <div class="text-start">
                        <p class="mb-0 text-white small fw-bold">By {{ $post->author->name }}</p>
                        <p class="mb-0 text-muted extra-small">Financial Analyst</p>
                    </div>
                </div>

                {{-- Main Featured Image --}}
                <div class="rounded-4 overflow-hidden shadow-lg border" style="border-color: rgba(255,255,255,0.1)!important;">
                    <img src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/Bold Moves.jpeg') }}" 
                         alt="{{ $post->title }}" class="img-fluid w-100" style="max-height: 500px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="post-body pb-5" style="background: var(--deep);">
    <div class="container">
        <div class="row justify-content-center">
            
            {{-- Floating Social Share (Desktop Only) --}}
            <div class="col-lg-1 d-none d-lg-block">
                <div class="sticky-top" style="top: 100px; z-index: 10;">
                    <div class="d-flex flex-column align-items-center gap-3">
                        <small class="text-muted text-uppercase fw-bold" style="writing-mode: vertical-rl; font-size: 0.6rem; letter-spacing: 2px;">Share</small>
                        <a href="#" class="text-white-50 hover-accent"><i class="fab fa-twitter fs-5"></i></a>
                        <a href="#" class="text-white-50 hover-accent"><i class="fab fa-linkedin-in fs-5"></i></a>
                        <a href="#" class="text-white-50 hover-accent"><i class="fab fa-facebook-f fs-5"></i></a>
                    </div>
                </div>
            </div>

            {{-- Article Content --}}
            <div class="col-lg-8">
                <div class="article-content text-white-50 mb-5" style="font-size: 1.15rem; line-height: 1.8; letter-spacing: 0.2px;">
                    {!! $post->content !!}
                </div>

                {{-- Tags Section --}}
                <div class="pt-4 border-top border-secondary">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <span class="text-white me-2 small fw-bold">TAGS:</span>
                        <a href="#" class="btn btn-sm btn-glass rounded-pill px-3">Investing</a>
                        <a href="#" class="btn btn-sm btn-glass rounded-pill px-3">Markets</a>
                        <a href="#" class="btn btn-sm btn-glass rounded-pill px-3">Ocean Finance</a>
                    </div>
                </div>

                {{-- Author Bio Card --}}
                <div class="mt-5 p-4 rounded-4" style="background: rgba(255,255,255,0.03); border: 1px solid rgba(255,255,255,0.08);">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-accent d-flex align-items-center justify-content-center text-dark fw-bold me-3" style="width: 60px; height: 60px; font-size: 1.2rem;">
                            {{ substr($post->author->name ?? 'F', 0, 1) }}
                        </div>
                        <div>
                            <h5 class="text-white mb-0">{{ $post->author->name }}</h5>
                            <p class="text-accent mb-0 small">Expert Contributor</p>
                        </div>
                    </div>
                    <p class="small text-muted mb-0">Our analysts provide deep insights into global market trends and sustainable oceanic investments. Follow us for the latest data-driven reports.</p>
                </div>
            </div>

            <div class="col-lg-1 d-none d-lg-block"></div>
        </div>
    </div>
</section>

<style>
    /* Styling for dynamic content from TinyMCE/CKEditor */
    .article-content h2, .article-content h3 {
        color: #fff;
        margin-top: 2rem;
        margin-bottom: 1rem;
        font-weight: 700;
    }

    .article-content p {
        margin-bottom: 1.5rem;
    }

    .article-content blockquote {
        border-left: 4px solid var(--accent);
        padding-left: 1.5rem;
        font-style: italic;
        color: #fff;
        background: rgba(0, 224, 255, 0.05);
        padding: 2rem;
        margin: 2rem 0;
        border-radius: 0 1rem 1rem 0;
    }

    .article-content img {
        max-width: 100%;
        border-radius: 1rem;
        margin: 2rem 0;
    }

    .btn-glass {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #adb5bd;
        font-size: 0.75rem;
    }

    .btn-glass:hover {
        background: var(--accent);
        color: var(--deep);
    }

    .hover-accent:hover {
        color: var(--accent) !important;
    }
</style>
@endsection