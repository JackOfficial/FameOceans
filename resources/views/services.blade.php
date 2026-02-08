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

<!-- SERVICE 1: BUSINESS & STRATEGIC ADVISORY -->
<section>
  <div class="container">
    <div class="text-center mb-3">
    <h2 class="section-title">Our Services</h2>
    <p class="section-subtitle">
      Comprehensive advisory solutions for a connected global economy.
    </p>
  </div>
    <div class="row align-items-center g-5">

      <div class="col-md-6 text-light">
        <i class="fas fa-chart-line fa-2x mb-3" style="color: var(--accent);"></i>
        <h3 class="fw-bold mb-3">Business & Strategic Advisory</h3>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          FameOceans provides strategic advisory services to organizations seeking
          clarity, structure, and sustainable growth in complex and emerging markets.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          We work closely with leadership teams to assess business challenges,
          identify opportunities, and design strategies that align vision with
          execution across borders.
        </p>

        <ul style="color: rgba(227,233,255,0.65);">
          <li>Market entry and expansion strategy</li>
          <li>Business diagnostics and performance analysis</li>
          <li>Organizational structuring and governance</li>
          <li>Strategic planning and advisory engagements</li>
        </ul>
      </div>

      <div class="col-md-6 text-center">
        <img src="{{ asset('images/service-business.jpg') }}"
             class="img-fluid rounded shadow-lg"
             alt="Business Advisory">
      </div>

    </div>
  </div>
</section>

<!-- SERVICE 2: HUMAN CAPITAL CONSULTING -->
<section>
  <div class="container">
    <div class="row align-items-center g-5 flex-md-row-reverse">

      <div class="col-md-6 text-light">
        <i class="fas fa-users-cog fa-2x mb-3" style="color: var(--accent);"></i>
        <h3 class="fw-bold mb-3">Human Capital Consulting</h3>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          We help organizations align their people strategy with business goals
          in an increasingly global and mobile workforce.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          Our human capital advisory focuses on building capable leadership,
          optimizing workforce structures, and enabling talent to perform
          effectively across cultures and regions.
        </p>

        <ul style="color: rgba(227,233,255,0.65);">
          <li>Workforce planning and talent strategy</li>
          <li>Leadership and management development</li>
          <li>Performance management frameworks</li>
          <li>Global workforce mobility advisory</li>
        </ul>
      </div>

      <div class="col-md-6 text-center">
        <img src="{{ asset('images/service-human-capital.jpg') }}"
             class="img-fluid rounded shadow-lg"
             alt="Human Capital Consulting">
      </div>

    </div>
  </div>
</section>

<!-- SERVICE 3: GLOBAL MOBILITY ADVISORY -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">

      <div class="col-md-6 text-light">
        <i class="fas fa-plane-departure fa-2x mb-3" style="color: var(--accent);"></i>
        <h3 class="fw-bold mb-3">Global Mobility Advisory</h3>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          FameOceans supports professionals and organizations navigating
          international mobility with clarity, compliance, and confidence.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          We advise on cross-border transitions, relocation pathways, and
          international career mobility while minimizing risk and uncertainty.
        </p>

        <ul style="color: rgba(227,233,255,0.65);">
          <li>International relocation advisory</li>
          <li>Mobility planning and strategy</li>
          <li>Cross-border workforce transitions</li>
          <li>Global career pathway guidance</li>
        </ul>
      </div>

      <div class="col-md-6 text-center">
        <img src="{{ asset('images/service-mobility.jpg') }}"
             class="img-fluid rounded shadow-lg"
             alt="Global Mobility Advisory">
      </div>

    </div>
  </div>
</section>

<!-- SERVICE 4: CULTURAL EXCHANGE & PARTNERSHIPS -->
<section>
  <div class="container">
    <div class="row align-items-center g-5 flex-md-row-reverse">

      <div class="col-md-6 text-light">
        <i class="fas fa-globe fa-2x mb-3" style="color: var(--accent);"></i>
        <h3 class="fw-bold mb-3">Cultural Exchange & Partnerships</h3>

        <p style="color: rgba(227,233,255,0.85); font-size:18px;">
          We design and support structured cultural exchange initiatives that
          promote international collaboration and cross-cultural understanding.
        </p>

        <p style="color: rgba(227,233,255,0.70);">
          FameOceans partners with institutions, networks, and organizations to
          build sustainable international relationships that create shared value.
        </p>

        <ul style="color: rgba(227,233,255,0.65);">
          <li>Cross-cultural exchange programs</li>
          <li>Institutional and organizational partnerships</li>
          <li>International collaboration frameworks</li>
          <li>Global network development</li>
        </ul>
      </div>

      <div class="col-md-6 text-center">
        <img src="{{ asset('images/service-culture.jpg') }}"
             class="img-fluid rounded shadow-lg"
             alt="Cultural Exchange & Partnerships">
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