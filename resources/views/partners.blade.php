@extends('layouts.app')

@section('content')

<!-- HERO / PARTNERS INTRO -->
<section class="hero py-5 mt-5 position-relative overflow-hidden">
  <div class="container text-center py-5">
    <div class="animate__animated animate__fadeIn">
      <div class="d-inline-flex align-items-center justify-content-center p-3 mb-4 rounded-circle border border-white border-opacity-10 shadow-lg" style="background: rgba(58,123,253,0.1); width: 90px; height: 90px;">
        <i class="fas fa-handshake fa-3x" style="color: var(--accent); filter: drop-shadow(0 0 12px var(--accent));"></i>
      </div>

      <h1 class="display-3 fw-bold mb-3" style="background: linear-gradient(90deg, #ffffff, #9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
        Stronger Together
      </h1>
      
      <p class="lead mx-auto text-light-50 mb-4" style="max-width: 850px; font-size: 1.25rem; color: rgba(227,233,255,0.85); line-height: 1.8;">
        FameOceans collaborates with trusted organizations, academic institutions, corporate leaders, and strategic networks across Africa, Europe, and the Middle East to unlock global mobility, trade, and strategic advisory opportunities.
      </p>

      <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
        <a href="#partner-categories" class="btn btn-outline-info rounded-pill px-4 py-2 text-white border-opacity-25">
          <i class="fas fa-layer-group me-2"></i> Our Strategic Networks
        </a>
        <a href="#partner-inquiry" class="btn btn-primary rounded-pill px-4 py-2 shadow-lg transform-scale">
          <i class="fas fa-paper-plane me-2"></i> Become a Partner
        </a>
      </div>
    </div>
  </div>
</section>

<!-- PARTNERS OVERVIEW CATEGORIES -->
<section id="partner-categories" class="py-5 bg-black bg-opacity-25 border-top border-bottom border-white border-opacity-10">
  <div class="container text-center py-4">
    <h2 class="section-title h1 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      A Global Network of Collaboration
    </h2>
    <p class="section-subtitle text-info text-uppercase fw-bold small mb-5" style="letter-spacing: 2px;">
      Partnerships that amplify impact across borders and sectors
    </p>

    <div class="row g-4 mt-2">

      <!-- CORPORATE PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 h-100 text-center border border-white border-opacity-10 transition-hover" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
          <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
            <i class="fas fa-building fa-2x" style="color: var(--accent);"></i>
          </div>
          <h5 class="fw-bold text-white mb-3">Corporate Partners</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.7); line-height: 1.6;">
            Organizations collaborating with us on cross-border business development, talent mobility, and market expansion strategy.
          </p>
        </div>
      </div>

      <!-- INSTITUTIONAL PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 h-100 text-center border border-white border-opacity-10 transition-hover" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
          <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
            <i class="fas fa-university fa-2x" style="color: var(--accent);"></i>
          </div>
          <h5 class="fw-bold text-white mb-3">Institutional Partners</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.7); line-height: 1.6;">
            Public agencies, trade registries, and policy advisors facilitating compliant, structured international mobility and trade pathways.
          </p>
        </div>
      </div>

      <!-- EDUCATIONAL PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 h-100 text-center border border-white border-opacity-10 transition-hover" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
          <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
            <i class="fas fa-graduation-cap fa-2x" style="color: var(--accent);"></i>
          </div>
          <h5 class="fw-bold text-white mb-3">Educational Pathways</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.7); line-height: 1.6;">
            Universities, vocational academies, and research institutions enabling global student mobility and cultural exchange programs.
          </p>
        </div>
      </div>

      <!-- COMMUNITY & NETWORK PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 h-100 text-center border border-white border-opacity-10 transition-hover" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
          <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
            <i class="fas fa-network-wired fa-2x" style="color: var(--accent);"></i>
          </div>
          <h5 class="fw-bold text-white mb-3">Networks & Tech</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.7); line-height: 1.6;">
            HR tech providers, ecosystem builders, and industry associations accelerating workforce management and digital innovation.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- REGIONAL ALLIANCE HUBS -->
<section class="py-5">
  <div class="container py-4">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 text-light">
        <div class="text-uppercase fw-bold mb-3" style="letter-spacing: 2px; color: var(--accent); font-size: 14px;">
          <span class="me-2">—</span> Global Presence & Ecosystems
        </div>

        <h2 class="display-5 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Anchored in Strategic Markets
        </h2>

        <p class="mb-4" style="color: rgba(227,233,255,0.85); font-size: 1.1rem; line-height: 1.8;">
          Our alliance network connects key economic regions across Central & Eastern Europe, East Africa, and the Gulf Corporation Council (GCC).
        </p>

        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-start p-3 rounded-3 border border-white border-opacity-10" style="background: rgba(255,255,255,0.02);">
            <img src="https://flagcdn.com/w80/ro.png" alt="Romania Flag" class="me-3 rounded-1 shadow-sm mt-1" style="width: 32px; height: auto;">
            <div>
              <h6 class="fw-bold text-white mb-1">European Union & CEE Strategic Hub</h6>
              <p class="small mb-0 text-light-50" style="color: rgba(227,233,255,0.65);">Bucharest operations bridging European educational pathways, market access, and legal frameworks.</p>
            </div>
          </div>

          <div class="d-flex align-items-start p-3 rounded-3 border border-white border-opacity-10" style="background: rgba(255,255,255,0.02);">
            <img src="https://flagcdn.com/w80/rw.png" alt="Rwanda Flag" class="me-3 rounded-1 shadow-sm mt-1" style="width: 32px; height: auto;">
            <div>
              <h6 class="fw-bold text-white mb-1">East African Operational Base</h6>
              <p class="small mb-0 text-light-50" style="color: rgba(227,233,255,0.65);">Kigali headquarters driving youth empowerment, trade initiatives, and cross-border initiatives across Rwanda, Burundi, & Uganda.</p>
            </div>
          </div>

          <div class="d-flex align-items-start p-3 rounded-3 border border-white border-opacity-10" style="background: rgba(255,255,255,0.02);">
            <img src="https://flagcdn.com/w80/ae.png" alt="UAE Flag" class="me-3 rounded-1 shadow-sm mt-1" style="width: 32px; height: auto;">
            <div>
              <h6 class="fw-bold text-white mb-1">Gulf & Middle East Partner Network</h6>
              <p class="small mb-0 text-light-50" style="color: rgba(227,233,255,0.65);">Strategic partnerships in the UAE advancing talent acquisition, HR software solutions, and global recruitment.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="position-relative">
          <div class="position-absolute top-5 start-0 w-100 h-25 bg-info rounded-4 shadow-lg translate-middle-x translate-middle-y opacity-10" style="z-index: -1;"></div>
          <img src="{{ asset('images/continents.jpeg') }}" alt="Our Partnerships" class="img-fluid rounded-4 shadow-2xl border border-white border-opacity-10">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PARTNER VALUES & PRINCIPLES -->
<section class="py-5 bg-black bg-opacity-25 border-top border-white border-opacity-10">
  <div class="container text-center py-4">
    <h2 class="section-title h1 fw-bold mb-2">What We Value in Partnerships</h2>
    <p class="section-subtitle text-info text-uppercase fw-bold small mb-5" style="letter-spacing: 2px;">
      Principles that guide every collaboration
    </p>

    <div class="row g-4"> 
      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-hover" style="background: rgba(255,255,255,0.02); border-radius: 15px;">
          <i class="fas fa-shield-alt fa-2x mb-3" style="color: var(--accent);"></i>
          <h5 class="fw-bold text-white">Integrity</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.65);">Uncompromising compliance, ethical conduct, and transparency at every operational stage.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-hover" style="background: rgba(255,255,255,0.02); border-radius: 15px;">
          <i class="fas fa-globe fa-2x mb-3" style="color: var(--accent);"></i>
          <h5 class="fw-bold text-white">Global Perspective</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.65);">Deep respect for regional cultural dynamics coupled with international operational standards.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-hover" style="background: rgba(255,255,255,0.02); border-radius: 15px;">
          <i class="fas fa-sync-alt fa-2x mb-3" style="color: var(--accent);"></i>
          <h5 class="fw-bold text-white">Synergy</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.65);">Open exchanges of domain knowledge, infrastructure, networks, and market insights.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="glass-card p-4 text-center border border-white border-opacity-10 h-100 transition-hover" style="background: rgba(255,255,255,0.02); border-radius: 15px;">
          <i class="fas fa-chart-line fa-2x mb-3" style="color: var(--accent);"></i>
          <h5 class="fw-bold text-white">Long-Term Value</h5>
          <p class="small mb-0" style="color: rgba(227,233,255,0.65);">Strategic alignment aimed at building sustainable, multi-year initiatives with lasting impact.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CALL TO ACTION / INQUIRY SECTION -->
<section id="partner-inquiry" class="position-relative overflow-hidden py-5" style="background: linear-gradient(135deg, rgba(10, 20, 40, 0.95), rgba(15, 32, 67, 0.9)), url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;">
  <div class="container py-5 text-light">
    <div class="row align-items-center justify-content-between g-5">
      <div class="col-lg-6">
        <div class="pe-lg-4">
          <i class="fas fa-handshake fa-3x mb-4" style="color: var(--accent);"></i>
          <h2 class="display-4 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Become a FameOceans Partner
          </h2>
          <p class="lead mb-4" style="color: rgba(227,233,255,0.85); line-height: 1.8;">
            Join a growing network shaping global opportunity, international talent pathways, and trade collaboration across regions.
          </p>
          <div class="d-flex align-items-center gap-3 mt-4">
            <div class="d-flex align-items-center justify-content-center bg-info bg-opacity-10 rounded-circle text-info" style="width: 50px; height: 50px;">
              <i class="fas fa-globe-africa fa-lg"></i>
            </div>
            <div>
              <h6 class="text-white mb-0">Cross-Border Reach</h6>
              <small style="color: rgba(227,233,255,0.6);">Direct channels across Europe, East Africa, and the Middle East.</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="glass-card p-4 p-md-5 border border-white border-opacity-10 shadow-2xl" style="background: rgba(255,255,255,0.04); backdrop-filter: blur(15px); border-radius: 25px;">
          <h4 class="fw-bold text-white mb-3">Partner Inquiry</h4>
          <p class="small mb-4" style="color: rgba(227,233,255,0.7);">Interested in exploring joint opportunities? Connect with our strategic partnerships team.</p>

          <form action="{{ route('contact') }}" method="GET">
            <div class="mb-3">
              <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Organization Name</label>
              <input type="text" class="form-control bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3" placeholder="e.g. Acme Corporation or University" required>
            </div>
            <div class="mb-3">
              <label class="form-label small text-uppercase text-light-50 fw-bold" style="letter-spacing: 1px;">Partnership Type</label>
              <select class="form-select bg-dark text-white border-white border-opacity-10 rounded-3 py-2 px-3">
                <option value="corporate">Corporate / Business Advisory</option>
                <option value="institutional">Institutional / Public Sector</option>
                <option value="educational">Educational / Student Pathways</option>
                <option value="tech">Technology / HR Mobility Partner</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary w-100 py-3 rounded-3 shadow-lg transform-scale mt-3 fw-bold">
              Submit Inquiry <i class="fas fa-arrow-right ms-2"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .glass-card { 
    transition: all 0.4s ease; 
  }
  .glass-card:hover { 
    transform: translateY(-8px); 
    background: rgba(255,255,255,0.07) !important;
    border-color: rgba(154, 223, 255, 0.3) !important;
  }
  .transform-scale { 
    transition: transform 0.3s ease; 
  }
  .transform-scale:hover { 
    transform: scale(1.03); 
  }
  .transition-hover:hover i { 
    transform: scale(1.15); 
    transition: transform 0.3s ease; 
  }
</style>

@endsection