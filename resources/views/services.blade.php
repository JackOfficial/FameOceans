@extends('layouts.app')

@section('content')

<section class="hero py-5 mt-5">
    <div class="container text-center py-5">
        <div class="animate__animated animate__fadeIn">
            <i class="fas fa-briefcase fa-3x mb-4" style="color: var(--accent); filter: drop-shadow(0 0 10px var(--accent));"></i>
            <h1 class="display-3 fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                What We Do <br> & How We Create Impact
            </h1>
            <p class="lead mx-auto" style="max-width: 800px; color: rgba(227,233,255,0.7); font-size: 1.25rem;">
                FameOceans delivers structured, insight-driven advisory services designed to help organizations, institutions, and individuals navigate global opportunity with confidence.
            </p>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center mb-5">
        <h2 class="section-title h1 fw-bold mb-3">Our Core Expertise</h2>
        <p class="section-subtitle text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
            Comprehensive advisory solutions for a connected global economy.
        </p>
    </div>

    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-light animate__animated animate__fadeInLeft">
                <div class="icon-box mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px; background: rgba(58,123,253,0.15); border-radius: 12px;">
                    <i class="fas fa-chart-line fa-2x" style="color: var(--accent);"></i>
                </div>
                <h2 class="fw-bold mb-4 display-6 text-white">Business & Strategic Advisory</h2>
                <p class="mb-4" style="color: rgba(227,233,255,0.85); font-size:1.1rem; line-height: 1.8;">
                    FameOceans provides strategic advisory services to organizations seeking clarity, structure, and sustainable growth in complex and emerging markets.
                </p>
                <ul class="list-unstyled custom-list mb-4">
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Market entry and expansion strategy</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Business diagnostics and performance analysis</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Organizational structuring and governance</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Strategic planning and advisory engagements</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper p-2 border border-white border-opacity-10 rounded-4 shadow-2xl">
                    <img src="{{ asset('images/business.jpg') }}" class="img-fluid rounded-3" alt="Business Advisory">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center g-5 flex-lg-row-reverse">
            <div class="col-lg-6 text-light animate__animated animate__fadeInRight">
                <div class="icon-box mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px; background: rgba(58,123,253,0.15); border-radius: 12px;">
                    <i class="fas fa-users-cog fa-2x" style="color: var(--accent);"></i>
                </div>
                <h2 class="fw-bold mb-4 display-6 text-white">Human Capital Consulting</h2>
                <p class="mb-4" style="color: rgba(227,233,255,0.85); font-size:1.1rem; line-height: 1.8;">
                    We help organizations align their people strategy with business goals in an increasingly global and mobile workforce.
                </p>
                <ul class="list-unstyled custom-list mb-4">
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Workforce planning and talent strategy</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Leadership and management development</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Performance management frameworks</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Global workforce mobility advisory</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper p-2 border border-white border-opacity-10 rounded-4 shadow-2xl">
                    <img src="{{ asset('images/Consultancy.jpeg') }}" class="img-fluid rounded-3" alt="Human Capital Consulting">
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-light">
                <div class="icon-box mb-4 d-flex align-items-center justify-content-center shadow-sm" style="width: 60px; height: 60px; background: rgba(58,123,253,0.15); border-radius: 12px;">
                    <i class="fas fa-plane-departure fa-2x" style="color: var(--accent);"></i>
                </div>
                <h2 class="fw-bold mb-4 display-6 text-white">Global Mobility Advisory</h2>
                <p class="mb-4" style="color: rgba(227,233,255,0.85); font-size:1.1rem; line-height: 1.8;">
                    Supporting professionals and organizations navigating international mobility with clarity, compliance, and confidence.
                </p>
                <ul class="list-unstyled custom-list mb-4">
                    <li><i class="fas fa-check-circle me-2 text-info"></i> International relocation advisory</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Mobility planning and strategy</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Cross-border workforce transitions</li>
                    <li><i class="fas fa-check-circle me-2 text-info"></i> Global career pathway guidance</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="image-wrapper p-2 border border-white border-opacity-10 rounded-4 shadow-2xl">
                    <img src="{{ asset('images/Strategic investment pathways accross Africa.png') }}" class="img-fluid rounded-3" alt="Global Mobility Advisory">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black bg-opacity-25">
    <div class="container text-center py-5">
        <h2 class="section-title h1 fw-bold mb-5">Who We Serve</h2>
        <div class="row g-4">
            @php
                $segments = [
                    ['icon' => 'building', 'title' => 'Organizations', 'desc' => 'Private companies, institutions, and NGOs seeking strategic guidance.'],
                    ['icon' => 'user-tie', 'title' => 'Professionals', 'desc' => 'Individuals navigating international careers and mobility pathways.'],
                    ['icon' => 'rocket', 'title' => 'Startups', 'desc' => 'Emerging ventures expanding into new markets and regions.'],
                    ['icon' => 'network-wired', 'title' => 'Global Networks', 'desc' => 'Cross-border partnerships and international collaborations.']
                ];
            @endphp

            @foreach($segments as $s)
            <div class="col-lg-3 col-md-6">
                <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-all" 
                     style="background: rgba(255,255,255,0.02); border-radius: 20px; backdrop-filter: blur(10px);">
                    <div class="mb-3 d-inline-block p-3 rounded-circle bg-info bg-opacity-10">
                        <i class="fas fa-{{ $s['icon'] }} fa-xl text-info"></i>
                    </div>
                    <h5 class="fw-bold text-white mb-2">{{ $s['title'] }}</h5>
                    <p class="small mb-0" style="color: rgba(227,233,255,0.6);">{{ $s['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden" style="padding: 120px 0;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(135deg, rgba(10, 20, 40, 0.9), rgba(58, 123, 253, 0.4)),
        url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;
        z-index: -1;
    "></div>

    <div class="container text-center text-light">
        <div class="glass-card py-5 px-4 d-inline-block border border-white border-opacity-10" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(15px); border-radius: 30px;">
            <i class="fas fa-compass fa-3x mb-4" style="color: var(--accent);"></i>
            <h2 class="display-5 fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Ready to Navigate Opportunity?
            </h2>
            <p class="lead mx-auto mb-4" style="max-width:700px; color: rgba(227,233,255,0.85);">
                Partner with FameOceans to move confidently across markets, cultures, and possibilities.
            </p>
            <a href="/contact" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg transform-scale transition-all">
                Start the Conversation <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .custom-list li {
        margin-bottom: 12px;
        color: rgba(227,233,255,0.7);
        display: flex;
        align-items: center;
    }
    .image-wrapper {
        transition: transform 0.5s ease;
    }
    .image-wrapper:hover {
        transform: scale(1.02);
    }
    .glass-card:hover {
        transform: translateY(-10px);
        background: rgba(255,255,255,0.05) !important;
        border-color: rgba(154, 223, 255, 0.3) !important;
    }
    .transform-scale:hover {
        transform: scale(1.05);
    }
</style>

@endsection