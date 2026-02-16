@extends('layouts.app')

@section('content')
<section class="blog-hero" style="background: radial-gradient(circle at top right, var(--surface), var(--abyss)); padding: 120px 0 60px;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold mb-3" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Ocean Insights</h1>
        <p class="text-muted mx-auto" style="max-width: 600px;">Expert analysis, market wisdom, and deep-sea investment strategies to navigate the financial currents.</p>
    </div>
</section>

<section class="pb-5" style="background: var(--abyss);">
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
            <a href="{{ route('blog.index') }}" class="btn btn-sm btn-glass active px-4 rounded-pill">All Insights</a>
            @foreach($categories as $category)
                <a href="{{ route('blog.category', $category->slug) }}" class="btn btn-sm btn-glass px-4 rounded-pill">{{ $category->name }}</a>
            @endforeach
        </div>

        <div class="row g-4">
            @forelse ($posts as $post)
            <div class="col-md-6 col-lg-4">
                <article class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect position-relative" 
                         style="background: rgba(255,255,255,0.02); backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.08)!important; transition: transform 0.3s ease;">
                    
                    {{-- Category Badge --}}
                    <span class="position-absolute top-0 end-0 m-3 badge rounded-pill bg-accent text-dark fw-bold px-3 py-2" style="z-index: 10; font-size: 0.65rem; background: var(--accent);">
                        {{ $post->category->name ?? 'Insight' }}
                    </span>

                    {{-- Image Wrapper --}}
                    <div class="overflow-hidden" style="height: 240px;">
                        <img src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/Bold Moves.jpeg') }}" 
                             alt="{{ $post->title }}" 
                             class="w-100 h-100 object-fit-cover transition-transform duration-500 hover-zoom">
                    </div>

                    {{-- Content --}}
                    <div class="p-4">
                        <div class="d-flex align-items-center mb-3 text-muted" style="font-size: 0.75rem;">
                            <span><i class="fas fa-calendar-alt me-1 text-accent"></i> {{ $post->published_at?->format('M d, Y') }}</span>
                            <span class="mx-2">•</span>
                            <span><i class="fas fa-clock me-1 text-accent"></i> 5 min read</span>
                        </div>

                        <h3 class="h4 text-white fw-bold mb-3 line-clamp-2">
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-decoration-none text-white hover-accent">
                                {{ $post->title }}
                            </a>
                        </h3>

                        <p class="text-white-50 small mb-4 line-clamp-3">
                            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
                        </p>

                        <div class="d-flex align-items-center justify-content-between mt-auto">
                            <div class="d-flex align-items-center">
                                <div class="rounded-circle bg-accent d-flex align-items-center justify-content-center text-dark fw-bold me-2" style="width: 30px; height: 30px; font-size: 0.7rem;">
                                    {{ substr($post->author->name ?? 'F', 0, 1) }}
                                </div>
                                <span class="small text-muted">{{ $post->author->name ?? 'FameOceans' }}</span>
                            </div>
                            
                            <a href="{{ route('blog.show', $post->slug) }}" class="text-accent text-decoration-none small fw-bold arrow-link">
                                READ MORE <i class="fas fa-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
            @empty
                <div class="col-12 text-center py-5">
                    <i class="fas fa-search mb-3 text-muted display-4"></i>
                    <p class="text-muted">The tide is low. No articles found in this category.</p>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-5">
            {{ $posts->links() }}
        </div>
    </div>
</section>

<style>
    /* Premium Visual Enhancements */
    .btn-glass {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: var(--muted);
        transition: all 0.3s ease;
    }
    .btn-glass:hover, .btn-glass.active {
        background: var(--accent);
        color: var(--abyss);
        border-color: var(--accent);
        box-shadow: 0 0 20px rgba(0, 224, 255, 0.3);
    }

    .hover-zoom { transition: transform 0.5s ease; }
    .glass-card:hover .hover-zoom { transform: scale(1.1); }
    .glass-card:hover { transform: translateY(-10px); }

    .line-clamp-2 { display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .line-clamp-3 { display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; }

    .text-accent { color: var(--accent) !important; }
    .hover-accent:hover { color: var(--accent) !important; }

    .arrow-link { transition: all 0.3s ease; }
    .arrow-link:hover i { transform: translateX(5px); }
</style>
@endsection