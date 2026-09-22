@extends('layouts.app')

@section('content')

<section class="hero py-5 mt-5">
    <div class="container text-center py-5">
        <div class="animate__animated animate__fadeIn">
            <i class="fas fa-compass fa-3x mb-4" style="color: var(--accent); filter: drop-shadow(0 0 10px var(--accent));"></i>
            <h1 class="display-3 fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Who We Are <br> & Why We Exist
            </h1>
            <p class="lead mx-auto text-light-50" style="max-width: 850px; font-size: 1.25rem; color: rgba(227,233,255,0.85);">
                <strong class="text-white">FameOceans Corporation</strong> is a Global Mobility & Investment Advisory company supporting organizations, individuals, and institutions across international markets. Our international presence supports legal and compliant cross-border mobility, strategic advisory, education pathways, cultural exchange, market development, exhibitions, and international business partnerships across Africa, Europe, and the Gulf.
            </p>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-light animate__animated animate__fadeInLeft">
                <div class="text-uppercase fw-bold mb-3" style="letter-spacing:3px; color: var(--accent); font-size:14px;">
                    <span class="me-2">—</span> Our Story
                </div>

                <h2 class="display-5 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    Born From Global Ambition
                </h2>

                <p class="mb-4" style="color: rgba(227,233,255,0.85); font-size:1.1rem; line-height: 1.8;">
                    FameOceans was established to address the growing need for structured advisory services in an increasingly interconnected global environment. From its inception, the firm has focused on supporting organizations and stakeholders navigating cross-border business.
                </p>

                <p class="mb-4" style="color: rgba(227,233,255,0.7); line-height: 1.7;">
                    Over time, FameOceans has expanded its advisory scope and geographic reach, developing a presence across East Africa, the Middle East, and Europe.
                </p>

                <div class="p-3 border-start border-info bg-light bg-opacity-10 rounded-end">
                    <p class="mb-0 italic text-info" style="font-size: 0.95rem;">
                        Today, FameOceans operates as a global advisory firm, delivering strategic consulting solutions grounded in regional expertise.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 animate__animated animate__fadeInRight">
                <div class="position-relative">
                    <div class="position-absolute top-5 start-0 w-100 h-25 bg-info rounded shadow-lg translate-middle-x translate-middle-y opacity-10" style="z-index: -1;"></div>
                    <img src="{{ asset('images/Global Network.jpeg') }}" alt="Our Story"
                         class="img-fluid rounded-4 shadow-2xl border border-white border-opacity-10">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-black bg-opacity-25">
    <div class="container text-center py-4">
        <h2 class="section-title h1 fw-bold mb-3">Our Mission & Vision</h2>
        <p class="section-subtitle mb-5 text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
            The compass that guides every move we make
        </p>

        <div class="row g-4 mt-2">
            <div class="col-md-6">
                <div class="glass-card p-5 text-center h-100 border border-white border-opacity-10 shadow-lg" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px; background: rgba(58,123,253,0.1); border-radius: 50%;">
                        <i class="fas fa-bullseye fa-2x" style="color: var(--accent);"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3 text-uppercase">Our Mission</h4>
                    <p class="text-light-50 mb-0" style="color: rgba(227,233,255,0.75);">
                        To empower talents and businesses by providing a trusted global platform where visibility, collaboration, and growth happen naturally.
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="glass-card p-5 text-center h-100 border border-white border-opacity-10 shadow-lg" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 80px; height: 80px; background: rgba(58,123,253,0.1); border-radius: 50%;">
                        <i class="fas fa-eye fa-2x" style="color: var(--accent);"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3 text-uppercase">Our Vision</h4>
                    <p class="text-light-50 mb-0" style="color: rgba(227,233,255,0.75);">
                        A world where borders no longer limit opportunity, and talent can rise based on merit, creativity, and ambition.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center py-5">
        <h2 class="section-title h1 fw-bold mb-5">Our Core Values</h2>

        <div class="row g-4">
            @php
                $values = [
                    ['icon' => 'handshake', 'title' => 'Trust', 'desc' => 'Transparency and integrity guide every connection.'],
                    ['icon' => 'globe', 'title' => 'Global Mindset', 'desc' => 'We think beyond borders and embrace diversity.'],
                    ['icon' => 'rocket', 'title' => 'Growth', 'desc' => 'We exist to help talents and businesses scale.'],
                    ['icon' => 'lightbulb', 'title' => 'Innovation', 'desc' => 'We evolve to meet the future of global work.']
                ];
            @endphp

            @foreach($values as $v)
            <div class="col-lg-3 col-md-6">
                <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-hover" 
                     style="background: rgba(255,255,255,0.02); border-radius: 15px;">
                    <i class="fas fa-{{ $v['icon'] }} fa-2x mb-3" style="color: var(--accent);"></i>
                    <h5 class="fw-bold text-white">{{ $v['title'] }}</h5>
                    <p class="small mb-0" style="color: rgba(227,233,255,0.6);">{{ $v['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@php
    $teamMembers = [
        [
            'name' => 'Emmanuel NIYIRAGIRA',
            'role' => 'Co-Founder & Director of Operations',
            'bio' => 'One of the Co-Founders of FameOceans Corporation, Emmanuel leads operations, international partnerships, and strategic growth across our global operations.',
            'image' => asset('images/team/emmanuel-niyiragira.png'),
            'color' => 'info'
        ],
        [
            'name' => 'Musengimana Jacques',
            'role' => 'IT & Digital Transformation Lead',
            'bio' => 'Guides overall corporate vision, driving digital transformation, IT infrastructure, global digital marketing strategies, and cross-border expansion initiatives across European and African markets.',
            'image' => asset('images/team/musengimana-jacques.jpeg'),
            'color' => 'primary'
        ],
    ];
@endphp

<!-- EXPANDED LEADERSHIP & TEAM SECTION -->
<section class="py-5 bg-black bg-opacity-25 border-top border-white border-opacity-10">
    <div class="container py-4 text-center">
        <div class="mb-5">
            <h2 class="section-title h1 fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Our Leadership & Global Team
            </h2>
            <p class="section-subtitle text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
                Leadership That Drives Global Growth
            </p>
            <p class="lead mx-auto text-light-50 mt-3" style="max-width: 750px; font-size: 1.1rem; color: rgba(227,233,255,0.8);">
                FameOceans Corporation is led by a multi-disciplinary team driving operational excellence, international partnerships, legal compliance, and sustainable growth across Africa, Europe, and the Middle East.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            @foreach($teamMembers as $member)
            <div class="col-lg-6 col-md-6">
                <div class="glass-card p-4 text-center border border-white border-opacity-10 shadow-lg h-100 d-flex flex-column justify-content-between" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(12px); border-radius: 20px;">
                    <div>
                        <div class="mb-4 position-relative mx-auto" style="width: 120px; height: 120px;">
                            <img src="{{ $member['image'] }}" 
                                 alt="{{ $member['name'] }}" 
                                 class="w-100 h-100 rounded-circle object-fit-cover border border-{{ $member['color'] }} border-opacity-50 shadow-lg"
                                 onerror="this.onerror=null; this.src='https://ui-avatars.com/api/?name={{ urlencode($member['name']) }}&background=0D6EFD&color=fff&size=128';" />
                        </div>
                        
                        <h4 class="fw-bold text-white mb-1">{{ $member['name'] }}</h4>
                        <span class="badge bg-{{ $member['color'] }} text-dark font-monospace mb-3 px-3 py-2 small">{{ $member['role'] }}</span>
                        
                        <p class="text-light-50 mb-4 small" style="color: rgba(227,233,255,0.75); line-height: 1.7;">
                            {{ $member['bio'] }}
                        </p>
                    </div>

                    <div class="d-flex justify-content-center gap-3 border-top border-white border-opacity-10 pt-3">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 34px; height: 34px;" title="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="mailto:contact@fameoceans.com" class="btn btn-outline-info btn-sm rounded-circle d-flex align-items-center justify-content-center" style="width: 34px; height: 34px;" title="Email">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Global Offices Section -->
<section class="py-5 border-top border-bottom border-white border-opacity-10">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="section-title h1 fw-bold mb-3">Our Global Offices & Presence</h2>
            <p class="section-subtitle text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
                Connecting Africa, Europe, and the Middle East
            </p>
        </div>

        <div class="row g-4">
            <!-- Romania -->
            <div class="col-lg-4 col-md-6">
                <div class="glass-card p-4 h-100 border border-white border-opacity-10 d-flex flex-column" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://flagcdn.com/w80/ro.png" alt="Romania Flag" class="me-3 rounded-1 shadow-sm" style="width: 45px; height: auto;">
                        <div>
                            <h4 class="fw-bold text-white mb-0">FameOceans S.R.L.</h4>
                            <span class="badge bg-info text-dark font-monospace small">European Headquarters</span>
                        </div>
                    </div>
                    <p class="small text-light-50 mb-4" style="color: rgba(227,233,255,0.75);">
                        Anchors FameOceans’ European operations, advisory services, education initiatives, cultural exchange, market development, exhibitions, and international partnerships.
                    </p>
                    <div class="mt-auto pt-3 border-top border-white border-opacity-10 text-light-50 small">
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-info"></i><strong>Registered Office:</strong> Calea Moșilor Nr. 195, Unit 17, Bl. 1bis, Etaj 5, Sector 2, Bucharest, Romania</p>
                        <p class="mb-1"><i class="fas fa-file-contract me-2 text-info"></i><strong>Trade Register:</strong> J2026050443000</p>
                        <p class="mb-0"><i class="fas fa-id-card me-2 text-info"></i><strong>CUI:</strong> 55447937</p>
                    </div>
                </div>
            </div>

            <!-- Rwanda -->
            <div class="col-lg-4 col-md-6">
                <div class="glass-card p-4 h-100 border border-white border-opacity-10 d-flex flex-column" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://flagcdn.com/w80/rw.png" alt="Rwanda Flag" class="me-3 rounded-1 shadow-sm" style="width: 45px; height: auto;">
                        <div>
                            <h4 class="fw-bold text-white mb-0">FameOceans Ltd</h4>
                            <span class="badge bg-info text-dark font-monospace small">African Operations</span>
                        </div>
                    </div>
                    <p class="small text-light-50 mb-4" style="color: rgba(227,233,255,0.75);">
                        Serves as FameOceans’ African operational base, supporting clients, partners, and cross-border initiatives across Rwanda, Burundi, Uganda, and wider African markets.
                    </p>
                    <div class="mt-auto pt-3 border-top border-white border-opacity-10 text-light-50 small">
                        <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-info"></i><strong>Office Address:</strong> KK 15 Rd, Kigali, Rwanda</p>
                        <p class="mb-1"><i class="fas fa-barcode me-2 text-info"></i><strong>Company Code:</strong> 121768804</p>
                        <p class="mb-0"><i class="fas fa-building me-2 text-info"></i><strong>Registered with:</strong> Rwanda Development Board — Office of the Registrar General</p>
                    </div>
                </div>
            </div>

            <!-- UAE -->
            <div class="col-lg-4 col-md-12">
                <div class="glass-card p-4 h-100 border border-white border-opacity-10 d-flex flex-column" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="d-flex align-items-center mb-3">
                        <img src="https://flagcdn.com/w80/ae.png" alt="UAE Flag" class="me-3 rounded-1 shadow-sm" style="width: 45px; height: auto;">
                        <div>
                            <h4 class="fw-bold text-white mb-0">United Arab Emirates</h4>
                            <span class="badge bg-info text-dark font-monospace small">Strategic Partner Network</span>
                        </div>
                    </div>
                    <p class="small text-light-50 mb-3" style="color: rgba(227,233,255,0.75);">
                        Through our UAE partner network, FameOceans supports businesses with strategic advisory, compliant workforce mobility, qualified talent solutions, and HR technology development.
                    </p>
                    <div class="mt-auto pt-3 border-top border-white border-opacity-10 text-light-50 small">
                        <p class="mb-0"><i class="fas fa-laptop-code me-2 text-info"></i><strong>Focus Areas:</strong> Business Development, HR Management Software, & Workforce Mobility Solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTINUOUS TICKER PARTNERS CAROUSEL -->
<section class="py-5 position-relative overflow-hidden border-top border-bottom border-white border-opacity-10" style="background: rgba(10, 20, 35, 0.6);">
    <div class="container text-center py-4">
        <div class="mb-4">
            <h2 class="section-title h1 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Our Trusted Partners & Regional Network
            </h2>
            <p class="section-subtitle text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
                Collaborating with leading global institutions & regional alliances
            </p>
        </div>

        <div class="partner-ticker-wrapper position-relative py-3">
            <div class="ticker-overlay-left"></div>
            <div class="ticker-overlay-right"></div>

            <div class="partner-ticker-track d-flex align-items-center gap-4">
                @php
                    $partnersList = [
                        ['icon' => 'university', 'title' => 'Academic Alliances', 'location' => 'EU & East Africa', 'color' => 'info'],
                        ['icon' => 'briefcase', 'title' => 'Global Workforce', 'location' => 'Romania & UAE', 'color' => 'primary'],
                        ['icon' => 'landmark', 'title' => 'Trade Registries', 'location' => 'Rwanda & CEE Hubs', 'color' => 'info'],
                        ['icon' => 'laptop-code', 'title' => 'Mobility Systems', 'location' => 'International Tech', 'color' => 'primary'],
                        ['icon' => 'globe-africa', 'title' => 'East Africa Trade Hub', 'location' => 'Kigali, Rwanda', 'color' => 'info'],
                        ['icon' => 'building', 'title' => 'Corporate Advisors', 'location' => 'Bucharest, Romania', 'color' => 'primary'],
                    ];
                @endphp

                <!-- Track Set 1 -->
                @foreach($partnersList as $item)
                <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
                    <div class="partner-icon-wrapper rounded-circle bg-{{ $item['color'] }} bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                        <i class="fas fa-{{ $item['icon'] }} text-{{ $item['color'] }} fa-lg"></i>
                    </div>
                    <div class="text-start">
                        <h6 class="fw-bold text-white mb-1 fs-6">{{ $item['title'] }}</h6>
                        <small class="text-info opacity-75 d-flex align-items-center gap-1">
                            <i class="fas fa-map-marker-alt" style="font-size: 11px;"></i> {{ $item['location'] }}
                        </small>
                    </div>
                </div>
                @endforeach

                <!-- Track Set 2 (Duplicate for Infinite Loop) -->
                @foreach($partnersList as $item)
                <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
                    <div class="partner-icon-wrapper rounded-circle bg-{{ $item['color'] }} bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px; flex-shrink: 0;">
                        <i class="fas fa-{{ $item['icon'] }} text-{{ $item['color'] }} fa-lg"></i>
                    </div>
                    <div class="text-start">
                        <h6 class="fw-bold text-white mb-1 fs-6">{{ $item['title'] }}</h6>
                        <small class="text-info opacity-75 d-flex align-items-center gap-1">
                            <i class="fas fa-map-marker-alt" style="font-size: 11px;"></i> {{ $item['location'] }}
                        </small>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden" style="padding: 140px 0;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(135deg, rgba(10, 20, 40, 0.9), rgba(58, 123, 253, 0.4)),
        url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;
        z-index: -1;
    "></div>

    <div class="container text-center text-light">
        <div class="glass-card py-5 px-4 d-inline-block border border-white border-opacity-10" style="background: rgba(255,255,255,0.05); backdrop-filter: blur(15px); border-radius: 30px; max-width: 900px;">
            <i class="fas fa-water fa-3x mb-4" style="color: var(--accent);"></i>

            <h2 class="display-4 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Why FameOceans?
            </h2>

            <p class="lead mx-auto mb-5" style="max-width:650px; color: rgba(227,233,255,0.9); line-height: 1.6;">
                Because opportunity should feel open, exciting, and accessible — 
                not complicated, exclusive, or out of reach.
            </p>

            <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg transform-scale">
                Join the Wave <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .glass-card { transition: all 0.4s ease; }
    .glass-card:hover { 
        transform: translateY(-5px); 
        background: rgba(255,255,255,0.08) !important;
        border-color: rgba(154, 223, 255, 0.3) !important;
    }
    .transform-scale:hover { transform: scale(1.05); }
    .transition-hover:hover i { transform: scale(1.2); transition: 0.3s; }

    /* PARTNER TICKER STYLES */
    .partner-ticker-wrapper {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
    }

    .partner-ticker-track {
        display: inline-flex;
        width: max-content;
        animation: partnerTicker 30s linear infinite;
    }

    .partner-ticker-wrapper:hover .partner-ticker-track {
        animation-play-state: paused;
    }

    .partner-card {
        min-width: 270px;
        background: rgba(255, 255, 255, 0.03) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .ticker-overlay-left,
    .ticker-overlay-right {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 120px;
        z-index: 2;
        pointer-events: none;
    }

    .ticker-overlay-left {
        left: 0;
        background: linear-gradient(to right, rgba(10, 20, 35, 1), rgba(10, 20, 35, 0));
    }

    .ticker-overlay-right {
        right: 0;
        background: linear-gradient(to left, rgba(10, 20, 35, 1), rgba(10, 20, 35, 0));
    }

    @keyframes partnerTicker {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
</style>

@endsection