@extends('layouts.app')

@section('content')

<!-- HERO / PARTNERS INTRO -->
<section class="hero">
  <div class="container text-center">
    <i class="fas fa-handshake fa-3x mb-3" style="color: var(--accent);"></i>

    <h1>Our Partners</h1>
    <h1>Stronger Together</h1>

    <p>
      FameOceans collaborates with trusted organizations, institutions,
      and networks that share our commitment to excellence, integrity,
      and global opportunity.
    </p>
  </div>
</section>

<!-- PARTNERS OVERVIEW -->
<section>
  <div class="container text-center">
    <h2 class="section-title">A Global Network of Collaboration</h2>
    <p class="section-subtitle">
      Partnerships that amplify impact across borders and sectors.
    </p>

    <div class="row g-4 mt-5">

      <!-- CORPORATE PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card h-100 text-center">
          <i class="fas fa-building fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Corporate Partners</h5>
          <p>
            Organizations collaborating with us on strategic advisory,
            talent development, and cross-border initiatives.
          </p>
        </div>
      </div>

      <!-- INSTITUTIONAL PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card h-100 text-center">
          <i class="fas fa-university fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Institutional Partners</h5>
          <p>
            Public and private institutions supporting structured
            international programs and policy-aligned initiatives.
          </p>
        </div>
      </div>

      <!-- EDUCATIONAL PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card h-100 text-center">
          <i class="fas fa-graduation-cap fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Educational Partners</h5>
          <p>
            Universities, academies, and training centers enabling
            talent development and cultural exchange.
          </p>
        </div>
      </div>

      <!-- COMMUNITY & NETWORK PARTNERS -->
      <div class="col-md-6 col-lg-3">
        <div class="glass-card h-100 text-center">
          <i class="fas fa-network-wired fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Networks & Communities</h5>
          <p>
            Professional networks and ecosystems fostering collaboration,
            visibility, and shared growth.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY PARTNERSHIP -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- TEXT -->
      <div class="col-md-6 text-light">
        <div class="text-uppercase fw-bold mb-2"
             style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Why Partner With Us
        </div>

        <h2 class="fw-bold mb-3"
            style="background: linear-gradient(90deg,#fff,#9adfff);
                   -webkit-background-clip: text;
                   -webkit-text-fill-color: transparent;">
          Shared Vision. Shared Impact.
        </h2>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          FameOceans partners with organizations that believe in long-term value
          creation, ethical collaboration, and cross-cultural exchange.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          Through partnership, we combine expertise, networks, and insight
          to deliver solutions that are broader in reach and deeper in impact.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/partners-bg.jpg') }}"
             alt="Our Partners"
             class="img-fluid rounded shadow-lg">
      </div>

    </div>
  </div>
</section>

<!-- PARTNER VALUES -->
<section>
  <div class="container text-center">
    <h2 class="section-title">What We Value in Partnerships</h2>
    <p class="section-subtitle">
      Principles that guide every collaboration.
    </p>

    <div class="row g-4 mt-5">

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-shield-alt fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Integrity</h5>
          <p>Ethical conduct and transparency at every level.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-globe fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Global Perspective</h5>
          <p>Respect for regional contexts and international standards.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-sync-alt fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Collaboration</h5>
          <p>Open exchange of ideas, resources, and expertise.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-chart-pie fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Long-Term Value</h5>
          <p>Partnerships built for sustainability and lasting impact.</p>
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

    <i class="fas fa-handshake fa-3x mb-3" style="color: var(--accent);"></i>

    <h2 class="display-5 fw-bold mb-3"
        style="background: linear-gradient(90deg,#fff,#9adfff);
               -webkit-background-clip: text;
               -webkit-text-fill-color: transparent;">
      Become a FameOceans Partner
    </h2>

    <p class="lead mx-auto mb-4"
       style="max-width:700px; color: rgba(227,233,255,0.85);">
      Join a growing network shaping opportunity, mobility,
      and collaboration across regions.
    </p>

    <a href="{{ route('contact') }}"
       class="btn btn-primary btn-lg shadow-lg px-5 py-3">
      Partner With Us <i class="fas fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>

@endsection