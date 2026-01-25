@extends('layouts.app')

@section('content')

<!-- HERO / ABOUT INTRO -->
<section class="hero">
  <div class="container text-center">
    <i class="fas fa-compass fa-3x mb-3" style="color: var(--accent);"></i>

    <h1>Who We Are</h1>
    <h1>And Why We Exist</h1>

    <p>
      FameOceans is a global talent and opportunity platform built to connect
      ambitious individuals, visionary businesses, and creative forces
      across borders — turning potential into real-world success.
    </p>
  </div>
</section>

<!-- OUR STORY -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- TEXT -->
      <div class="col-md-6 text-light">
        <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Our Story
        </div>

        <h2 class="fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Born From Global Ambition
        </h2>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          FameOceans was created to solve a simple but powerful problem:
          talent is everywhere, opportunity is not.
        </p>

        <p style="color: rgba(227,233,255,0.75);">
          We saw creators struggling to get visibility, businesses searching
          for the right people, and opportunities trapped by borders.
          So we built a bridge — a digital ocean where talent and ambition
          can meet, connect, and grow.
        </p>
      </div>

      <!-- IMAGE -->
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/about-bg.jpg') }}" alt="Our Story"
             class="img-fluid rounded shadow-lg">
      </div>

    </div>
  </div>
</section>

<!-- MISSION & VISION -->
<section>
  <div class="container text-center">

    <h2 class="section-title">Our Mission & Vision</h2>
    <p class="section-subtitle">
      The compass that guides every move we make.
    </p>

    <div class="row g-4 mt-5">

      <!-- MISSION -->
      <div class="col-md-6">
        <div class="glass-card text-center h-100">
          <i class="fas fa-bullseye fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Our Mission</h4>
          <p>
            To empower talents and businesses by providing a trusted global
            platform where visibility, collaboration, and growth
            happen naturally.
          </p>
        </div>
      </div>

      <!-- VISION -->
      <div class="col-md-6">
        <div class="glass-card text-center h-100">
          <i class="fas fa-eye fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Our Vision</h4>
          <p>
            A world where borders no longer limit opportunity,
            and talent can rise based on merit, creativity, and ambition.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CORE VALUES -->
<section>
  <div class="container text-center">
    <h2 class="section-title">Our Core Values</h2>
    <p class="section-subtitle">
      The principles that keep our ship steady.
    </p>

    <div class="row g-4 mt-5">

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-handshake fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Trust</h5>
          <p>Transparency and integrity guide every connection we facilitate.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-globe fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Global Mindset</h5>
          <p>We think beyond borders and embrace cultural diversity.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-rocket fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Growth</h5>
          <p>We exist to help talents and businesses scale sustainably.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card text-center">
          <i class="fas fa-lightbulb fa-2x mb-3" style="color: var(--accent);"></i>
          <h5>Innovation</h5>
          <p>We continuously evolve to meet the future of work and creativity.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- WHY FAMEOCEANS -->
<section style="
  background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)),
  url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;
  padding: 120px 0;
">
  <div class="container text-center text-light">

    <i class="fas fa-water fa-3x mb-3" style="color: var(--accent);"></i>

    <h2 class="display-5 fw-bold mb-3"
        style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Why FameOceans?
    </h2>

    <p class="lead mx-auto mb-4" style="max-width:700px; color: rgba(227,233,255,0.85);">
      Because opportunity should feel open, exciting, and accessible —
      not complicated, exclusive, or out of reach.
    </p>

    <a href="#" class="btn btn-primary btn-lg shadow-lg px-5 py-3">
      Join the Wave <i class="fas fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>

@endsection
