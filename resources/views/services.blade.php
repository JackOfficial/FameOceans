@extends('layouts.app')

@section('content')

<!-- HERO / SERVICES INTRO -->
<section class="hero">
  <div class="container text-center">
    <i class="fas fa-briefcase fa-3x mb-3" style="color: var(--accent);"></i>

    <h1>What We Do</h1>
    <h1>And How We Create Impact</h1>

    <p>
      FameOceans delivers structured, insight-driven advisory services designed
      to help organizations, institutions, and individuals navigate global
      opportunity with confidence.
    </p>
  </div>
</section>

<!-- SERVICES OVERVIEW -->
<section id="our-services">
  <div class="container text-center">
    <h2 class="section-title">Our Treasure Chest</h2>
    <p class="section-subtitle">
      Strategic services designed to unlock global success.
    </p>

    <div class="row g-4 mt-5">

      <!-- CARD 1: Consult -->
      <div class="col-md-3">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-lightbulb fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Consult</h4>
          <p>We dissect your business problems like a pirate with a map. Solutions incoming!</p>
        </div>
      </div>

      <!-- CARD 2: Culture -->
      <div class="col-md-3">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-globe-americas fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Culture</h4>
          <p>Bridging worlds, one handshake at a time. Get ready for global connections.</p>
        </div>
      </div>

      <!-- CARD 3: Invest -->
      <div class="col-md-3">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-coins fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Invest</h4>
          <p>We find the gold mines for your capital. Let your money swim in profit.</p>
        </div>
      </div>

       <div class="col-md-3">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-users-cog fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Human Capital Consulting</h4>
          <p>Strategic human capital advisory supporting global workforce mobility.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- TEXT -->
      <div class="col-md-6 text-light">
        <div class="text-uppercase fw-bold mb-2"
             style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Our Approach
        </div>

        <h2 class="fw-bold mb-3"
            style="background: linear-gradient(90deg,#fff,#9adfff);
                   -webkit-background-clip: text;
                   -webkit-text-fill-color: transparent;">
          Strategy Meets Perspective
        </h2>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          At FameOceans, we combine analytical rigor with cultural awareness.
          Every engagement is approached with a deep understanding of regional
          dynamics and global standards.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          Our advisory process is collaborative, research-driven, and outcomes-focused,
          ensuring that recommendations are practical, scalable, and aligned
          with long-term objectives.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/services-bg.jpg') }}"
             alt="Our Services"
             class="img-fluid rounded shadow-lg">
      </div>

    </div>
  </div>
</section>

<!-- WHO WE SERVE -->
<section>
  <div class="container text-center">
    <h2 class="section-title">Who We Serve</h2>
    <p class="section-subtitle">
      Across sectors, borders, and stages of growth.
    </p>

    <div class="row g-4 mt-5">

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-building fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Organizations</h5>
          <p>Private companies, institutions, and NGOs seeking strategic guidance.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-user-tie fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Professionals</h5>
          <p>Individuals navigating international careers and mobility pathways.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-rocket fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Startups</h5>
          <p>Emerging ventures expanding into new markets and regions.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-network-wired fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Global Networks</h5>
          <p>Cross-border partnerships and international collaborations.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CALL TO ACTION -->
<section style="
  background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)),
  url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;
  padding: 120px 0;
">
  <div class="container text-center text-light">

    <i class="fas fa-compass fa-3x mb-3" style="color: var(--accent);"></i>

    <h2 class="display-5 fw-bold mb-3"
        style="background: linear-gradient(90deg,#fff,#9adfff);
               -webkit-background-clip: text;
               -webkit-text-fill-color: transparent;">
      Ready to Navigate Opportunity?
    </h2>

    <p class="lead mx-auto mb-4"
       style="max-width:700px; color: rgba(227,233,255,0.85);">
      Partner with FameOceans to move confidently across markets,
      cultures, and possibilities.
    </p>

    <a href="/contact"
       class="btn btn-primary btn-lg shadow-lg px-5 py-3">
      Start the Conversation <i class="fas fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>

@endsection