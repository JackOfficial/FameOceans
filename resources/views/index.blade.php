<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FameOceans | Discover, Connect & Grow Talent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Favicon -->
    {{-- <link href="{{ asset('frontend/img/logo.png') }}" rel="icon"> --}}
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
/* =======================
   GLOBAL DESIGN SYSTEMw
======================= */
:root{
  --surface:#0e2a47;
  --mid:#081b34;
  --deep:#040d1c;
  --abyss:#020611;

  --primary:#3a7bfd;
  --accent:#00e0ff;

  --text:#e3e9ff;
  --muted:rgba(227,233,255,.75);
}

*{box-sizing:border-box}

body{
  font-family:'Poppins',sans-serif;
  color:var(--text);
  background:linear-gradient(
    to bottom,
    var(--surface),
    var(--mid) 35%,
    var(--deep) 70%,
    var(--abyss)
  );
  overflow-x:hidden;
}

/* =======================
   NAVBAR
======================= */
.navbar{
  background:rgba(3,8,20,.75);
  backdrop-filter:blur(14px);
  border-bottom:1px solid rgba(255,255,255,.08);
}
.navbar-brand{
  font-weight:700;
  font-size:24px;
   letter-spacing: 1px;
  background:linear-gradient(90deg,#fff,var(--accent));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.nav-link{
  color:var(--text)!important;
  margin-left:20px;
  font-size:14px;
}
.nav-link:hover{color:var(--accent)!important}

  .navbar-nav .nav-link {
    margin-right: 1rem;
    transition: color 0.3s;
  }

  .navbar-nav .nav-link:hover {
    color: #0d6efd;
  }
/* =======================
   SECTIONS
======================= */
section{
  padding:120px 0;
  position:relative;
}
.section-title{
  font-size:42px;
  font-weight:700;
  background:linear-gradient(90deg,#fff,#9adfff);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.section-subtitle{
  max-width:700px;
  margin:20px auto 0;
  color:var(--muted);
  font-size:17px;
}

/* =======================
   HERO
======================= */
.hero{
  min-height:100vh;
  display:flex;
  align-items:center;
  text-align:center;
  background:
    radial-gradient(circle at 20% 30%,rgba(58,123,253,.35),transparent 60%),
    radial-gradient(circle at 80% 70%,rgba(0,224,255,.25),transparent 60%);
}
.hero h1{
  font-size:64px;
  font-weight:700;
  background:linear-gradient(90deg,#fff,#9adfff,#3a7bfd);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.hero p{
  max-width:760px;
  margin:25px auto;
  font-size:18px;
  color:var(--muted);
}

/* =======================
   CARDS (GLASS)
======================= */
.glass-card{
  background:linear-gradient(180deg,rgba(255,255,255,.09),rgba(255,255,255,.02));
  border:1px solid rgba(255,255,255,.1);
  backdrop-filter:blur(20px);
  border-radius:22px;
  padding:35px;
  height:100%;
  box-shadow:0 25px 70px rgba(0,0,0,.55);
  transition:.4s ease;
}
.glass-card:hover{
  transform:translateY(-12px);
  box-shadow:0 35px 100px rgba(0,224,255,.3);
}

/* =======================
   BUTTONS
======================= */
.btn-primary{
  background:linear-gradient(90deg,var(--primary),var(--accent));
  border:none;
  border-radius:50px;
  padding:14px 40px;
  box-shadow:0 15px 45px rgba(0,224,255,.45);
}
.btn-outline-light{
  border-radius:50px;
  padding:14px 40px;
}

/* =======================
   CTA
======================= */
.cta{
  background:
    radial-gradient(circle at center,rgba(0,224,255,.25),transparent 70%),
    linear-gradient(to bottom,var(--deep),var(--abyss));
  text-align:center;
}

/* =======================
   FOOTER
======================= */
footer{
  background:#01040d;
  border-top:1px solid rgba(255,255,255,.08);
  padding:70px 20px;
  text-align:center;
  color:rgba(255,255,255,.6);
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">FameOceans</a>

    <!-- Toggler/collapsible Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
      aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Talents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Discover, Connect & Grow</h1>
    <h1>With Global Talent</h1>
    <p>
      FameOceans is a global platform designed to help talents, businesses,
      and creators connect across borders, unlock opportunities,
      and navigate the modern creative economy.
    </p>
    <div class="mt-4">
      <a class="btn btn-primary me-3">Get Started</a>
      <a class="btn btn-outline-light">Explore Talents</a>
    </div>
  </div>
</section>

<!-- CTA SECTION: Ocean Vibe -->
<section class="cta" style="position: relative; padding: 140px 0; overflow: hidden;
background: linear-gradient(to bottom right, rgba(58,123,253,0.6), rgba(0,224,255,0.4)),
url('{{ asset('images/ocean-bg.jpg') }}') no-repeat center center/cover;">

  <!-- Optional Animated Waves (SVG) -->
  <div style="position:absolute; bottom:0; width:100%; height:100px; overflow:hidden;">
    <svg viewBox="0 0 1200 100" preserveAspectRatio="none" style="width:100%; height:100%;">
      <path d="M0,30 C150,80 350,0 600,30 C850,60 1050,10 1200,30 L1200,100 L0,100 Z" style="stroke:none; fill:rgba(0,224,255,0.2);"></path>
    </svg>
  </div>

  <div class="container text-center text-light" style="position: relative; z-index:1;">
    
    <!-- Ocean Icon -->
    <i class="fas fa-water fa-3x mb-3" style="color: var(--accent);"></i>

    <!-- Headings -->
    <h2 class="display-5 fw-bold mb-2" style="background: linear-gradient(90deg,#9adfff,#3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      FameOceans: Your Partner in
    </h2>
    <h2 class="display-5 fw-bold mb-3" style="background: linear-gradient(90deg,#00e0ff,#3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Global Ambition
    </h2>

    <!-- Subtext -->
    <h3 class="mb-3" style="font-weight:500; color: rgba(227,233,255,0.85); max-width:700px; margin:0 auto;">
      From boardroom strategies to cross-cultural triumphs, we make global business feel like a tropical vacation.
    </h3>
    <h4 class="mb-4" style="font-weight:400; color: rgba(227,233,255,0.75); max-width:700px; margin:0 auto;">
      We handle the complexities so you can enjoy the rewards. Let's make your global dreams a reality.
    </h4>

    <!-- CTA Button -->
    <a href="#" class="btn btn-primary btn-lg shadow-lg px-5 py-3" style="font-size: 18px; background: linear-gradient(90deg,#3a7bfd,#00e0ff); transition: all 0.3s;">
      <i class="fas fa-ship me-2"></i>Connect Now
    </a>

  </div>
</section>


<!-- FEATURES -->
<section>
  <div class="container text-center">
    <h2 class="section-title">What We Offer</h2>
    <p class="section-subtitle">
      Powerful tools and connections designed to elevate talent visibility
      and business collaboration worldwide.
    </p>

    <div class="row g-4 mt-5">

      <!-- CARD 1: Talent Discovery -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-search fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Talent Discovery</h4>
          <p>Find and showcase talents from different industries and regions with ease.</p>
        </div>
      </div>

      <!-- CARD 2: Global Networking -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-network-wired fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Global Networking</h4>
          <p>Connect creators, brands, and investors on a single trusted platform.</p>
        </div>
      </div>

      <!-- CARD 3: Growth Opportunities -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-chart-line fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Growth Opportunities</h4>
          <p>Unlock collaborations, sponsorships, and career-defining opportunities.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ABOUT -->
<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="section-title">Why FameOceans?</h2>
        <p class="mt-4">
          We believe talent has no borders. FameOceans exists to bridge gaps,
          remove barriers, and provide a trusted digital space where creativity
          meets opportunity.
        </p>
        <a class="btn btn-outline-light mt-3">Learn More</a>
      </div>
      <div class="col-md-6">
        <div class="glass-card">
          <p>
            Our mission is to empower individuals and organizations
            through visibility, connection, and meaningful engagement.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TREASURE CHEST -->
<section>
  <div class="container text-center">
    <h2 class="section-title">Our Treasure Chest</h2>
    <p class="section-subtitle">
      Strategic services designed to unlock global success.
    </p>

    <div class="row g-4 mt-5">

      <!-- CARD 1: Consult -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-lightbulb fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Consult</h4>
          <p>We dissect your business problems like a pirate with a map. Solutions incoming!</p>
        </div>
      </div>

      <!-- CARD 2: Culture -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-globe-americas fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Culture</h4>
          <p>Bridging worlds, one handshake at a time. Get ready for global connections.</p>
        </div>
      </div>

      <!-- CARD 3: Invest -->
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Icon -->
          <i class="fas fa-coins fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Invest</h4>
          <p>We find the gold mines for your capital. Let your money swim in profit.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<section style="position: relative; background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)), url('{{ asset('images/about-bg.jpg') }}') no-repeat center center/cover; padding: 120px 0;">
  <div class="container text-center text-light">
    
    <!-- Decorative icon -->
    <i class="fa fa-globe fa-3x mb-3" style="color: var(--accent);"></i>
    
    <!-- Section small title -->
    <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: rgba(255,255,255,0.7); font-size: 16px;">About Us</div>
    
    <!-- Main headings -->
    <h2 class="display-5 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      FameOceans: Making Waves
    </h2>
    <h3 class="mb-4" style="font-weight:500; color: #e3e9ff;">Your Partners in Global Success</h3>
    
    <!-- Description -->
    <p class="lead mx-auto" style="max-width:700px; color: rgba(227,233,255,0.85); font-size: 18px;">
      We're the captains of your corporate ship, steering you through choppy waters to calm, profitable seas. Join us and navigate the global talent ocean with confidence.
    </p>

    <!-- Optional CTA -->
    <a href="#" class="btn btn-primary mt-4 px-5 py-3 shadow-lg" style="font-size:16px;">
      Learn More <i class="fa fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>

<section>
  <div class="container text-center">
    <h2 class="section-title">Why Choose FameOceans?</h2>
    <p class="section-subtitle">
      Strategic services designed to unlock global success.
    </p>

    <div class="row g-4 mt-5">
      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/Bold Moves.jpeg') }}" alt="Bold Moves" class="img-fluid rounded mb-3">
          <h4>Bold Moves</h4>
          <p>We don't play it safe. We make audacious recommendations that yield extraordinary results. Prepare for impact.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/Global Network.jpeg') }}" alt="Global Network" class="img-fluid rounded mb-3">
          <h4>Global Network</h4>
          <p>Our connections span the globe. We open doors you didn't even know existed, leading to unparalleled opportunities.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/Future Focus.jpeg') }}" alt="Future Focus" class="img-fluid rounded mb-3">
          <h4>Future Focus</h4>
          <p>We're always looking ahead. Get strategies that position you for tomorrow's triumphs, not yesterday's trends.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5" style="background: linear-gradient(to bottom, var(--mid), var(--deep));">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- IMAGE LEFT -->
      <div class="col-md-6 text-center text-md-start">
        <div class="position-relative">
          <img src="{{ asset('images/global fame.jpeg') }}" alt="Global Fame" class="img-fluid rounded shadow-lg">
          <!-- Optional decorative overlay -->
          <div style="position:absolute; top:0; left:0; width:100%; height:100%; background:rgba(58,123,253,0.15); border-radius:0.5rem;"></div>
        </div>
      </div>

      <!-- TEXT RIGHT -->
      <div class="col-md-6 text-center text-md-start text-light">
        <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Ready for Glory?
        </div>
        <h2 class="fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Let's Make It Happen
        </h2>
        <p class="mb-4" style="font-size: 18px; color: rgba(227,233,255,0.85); max-width:500px;">
          Stop dreaming, start doing. FameOceans is your launchpad to international acclaim and financial freedom.
        </p>
        <a href="#" class="btn btn-primary btn-lg shadow-lg">
          <i class="fa fa-rocket me-2"></i>Get Started
        </a>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- LEFT -->
      <div class="col-md-6">
        <h2 class="section-title">Our Prowess</h2>
        <p class="section-subtitle mt-3">
          Expertise that blends strategy, capital, and global perspective
          to deliver measurable impact.
        </p>
      </div>

      <!-- RIGHT -->
      <div class="col-md-6">
        <div class="glass-card mb-4">
          <h5>Business Brains</h5>
          <p>We dissect your business puzzles with razor-sharp intellect. Get ready for solutions that actually work, not just fancy jargon.</p>
        </div>

        <div class="glass-card mb-4">
          <h5>Money Moves</h5>
          <p>Your capital deserves a vacation. We guide it to greener pastures where it can multiply like rabbits.</p>
        </div>

        <div class="glass-card">
          <h5>Global Reach</h5>
          <p>Expand your horizons. We help you plant your flag on new continents, no passport required for your cash.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container text-center">
    <h2 class="section-title">Our Impact</h2>
    <p class="section-subtitle">Numbers that reflect trust and results.</p>

    <div class="row g-4 mt-5">
      <div class="col-md-3">
        <div class="glass-card">
          <h2>99+</h2>
          <p>Client Wins</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card">
          <h2>1K+</h2>
          <p>Connections Made</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card">
          <h2>50+</h2>
          <p>Projects Launched</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="glass-card">
          <h2>10+</h2>
          <p>Years of Excellence</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container text-center">
    <h2 class="section-title">What People Say</h2>

    <div class="row g-4 mt-5">
      <div class="col-md-4">
        <div class="glass-card">
          <p>
            “FameOceans transformed our global strategy.
            Their insights are sharp and effective.”
          </p>
          <strong>Alex Johnson</strong><br>
          <small>CEO</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card">
          <p>
            “The cultural exchange experience opened doors
            I never imagined possible.”
          </p>
          <strong>Maria Chen</strong><br>
          <small>Entrepreneur</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card">
          <p>
            “Smart investments, global reach,
            and professional execution.”
          </p>
          <strong>David Okello</strong><br>
          <small>Investor</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- OCEAN INSIGHTS BLOG SECTION -->
<section>
  <div class="container text-center">
    <h2 class="section-title">Ocean Insights</h2>
    <p class="section-subtitle">Wisdom from the deep blue.</p>

    <div class="row g-4 mt-5">

      <!-- BLOG CARD 1 -->
      <div class="col-md-4">
        <div class="glass-card text-start">
          <!-- Blog Image -->
          <img src="{{ asset('images/Bold Moves.jpeg') }}" alt="Mobility Moves" class="img-fluid rounded mb-3">
          <!-- Blog Title -->
          <h4 class="mb-2">Mobility Moves</h4>
          <!-- Metadata -->
          <small class="text-light d-block mb-2"><i class="fas fa-user me-1"></i>By Jane Doe | <i class="fas fa-calendar-alt me-1"></i>Jan 10, 2026</small>
          <!-- Blog Excerpt -->
          <p>Showcase your talent on an international stage and explore career-defining opportunities worldwide.</p>
          <!-- Read More -->
          <a href="#" class="btn btn-sm btn-outline-light mt-2"><i class="fas fa-arrow-right me-1"></i>Read More</a>
        </div>
      </div>

      <!-- BLOG CARD 2 -->
      <div class="col-md-4">
        <div class="glass-card text-start">
          <img src="{{ asset('images/global fame.jpeg') }}" alt="Global Market Tides" class="img-fluid rounded mb-3">
          <h4 class="mb-2">Global Market Tides</h4>
          <small class="text-light d-block mb-2"><i class="fas fa-user me-1"></i>By John Smith | <i class="fas fa-calendar-alt me-1"></i>Jan 15, 2026</small>
          <p>Elevate your influence and digital identity, expanding your reach across global markets.</p>
          <a href="#" class="btn btn-sm btn-outline-light mt-2"><i class="fas fa-arrow-right me-1"></i>Read More</a>
        </div>
      </div>

      <!-- BLOG CARD 3 -->
      <div class="col-md-4">
        <div class="glass-card text-start">
          <img src="{{ asset('images/culture.jpeg') }}" alt="Cultural Currents" class="img-fluid rounded mb-3">
          <h4 class="mb-2">Cultural Currents</h4>
          <small class="text-light d-block mb-2"><i class="fas fa-user me-1"></i>By Maria Lee | <i class="fas fa-calendar-alt me-1"></i>Jan 20, 2026</small>
          <p>Connect with brands, sponsors, and collaborators to expand your creative horizons globally.</p>
          <a href="#" class="btn btn-sm btn-outline-light mt-2"><i class="fas fa-arrow-right me-1"></i>Read More</a>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- CTA ABOVE FOOTER -->
<!-- CTA ABOVE FOOTER -->
<section style="
  position: relative; 
  background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)), url('{{ asset('images/ocean-cta.jpg') }}') no-repeat center center/cover; 
  padding: 120px 0;
  overflow: hidden;
 ">
  <div class="container text-center text-light">

    <!-- Decorative icon -->
    <i class="fas fa-ship fa-3x mb-3" style="color: var(--accent);"></i>

    <!-- Section small title -->
    <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: rgba(255,255,255,0.7); font-size: 16px;">
      Join the Wave
    </div>

    <!-- Main headings -->
    <h2 class="display-5 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      fameOceans: Your Partner in
    </h2>
    <h3 class="mb-4" style="font-weight:500; color: #e3e9ff;">
      Global Ambition
    </h3>

    <!-- Description -->
    <h4 class="lead mx-auto mb-4" style="max-width:700px; color: rgba(227,233,255,0.85); font-size: 18px;">
      From boardroom strategies to cross-cultural triumphs, we make global business feel like a tropical vacation.
    </h4>

    <p class="mx-auto mb-4" style="color: rgba(227,233,255,0.85);">We handle the complexities so you can enjoy the rewards. Let's make your global dreams a reality.</p>

    <!-- CTA Button -->
    <a href="#" class="btn btn-primary mt-3 px-5 py-3 shadow-lg" style="font-size:16px; background: linear-gradient(90deg,#3a7bfd,#00e0ff);">
      Connect Now! <i class="fas fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>


<!-- FOOTER -->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
