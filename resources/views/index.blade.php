<!-- UPDATED INDEX.BLADE.PHP WITH PHOTOS & ICONS -->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FameOceans | Discover, Connect & Grow Talent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
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
*{box-sizing:border-box;}
body{
  font-family:'Poppins',sans-serif;
  color:var(--text);
  background:linear-gradient(to bottom,var(--surface),var(--mid) 35%,var(--deep) 70%,var(--abyss));
  overflow-x:hidden;
}

/* NAVBAR */
.navbar{background:rgba(3,8,20,.75);backdrop-filter:blur(14px);border-bottom:1px solid rgba(255,255,255,.08);}
.navbar-brand{font-weight:700;font-size:24px;letter-spacing:1px;background:linear-gradient(90deg,#fff,var(--accent));-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
.nav-link{color:var(--text)!important;margin-left:20px;font-size:14px;}
.nav-link:hover{color:var(--accent)!important;}

/* SECTIONS */
section{padding:120px 0;position:relative;}
.section-title{font-size:42px;font-weight:700;background:linear-gradient(90deg,#fff,#9adfff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-align:center;}
.section-subtitle{max-width:700px;margin:20px auto 0;color:var(--muted);font-size:17px;text-align:center;}

/* HERO */
.hero{min-height:100vh;display:flex;align-items:center;text-align:center;background:radial-gradient(circle at 20% 30%,rgba(58,123,253,.35),transparent 60%),radial-gradient(circle at 80% 70%,rgba(0,224,255,.25),transparent 60%);}
.hero h1{font-size:64px;font-weight:700;background:linear-gradient(90deg,#fff,#9adfff,#3a7bfd);-webkit-background-clip:text;-webkit-text-fill-color:transparent;}
.hero p{max-width:760px;margin:25px auto;font-size:18px;color:var(--muted);}

/* CARDS */
.glass-card{background:linear-gradient(180deg,rgba(255,255,255,.09),rgba(255,255,255,.02));border:1px solid rgba(255,255,255,.1);backdrop-filter:blur(20px);border-radius:22px;padding:35px;height:100%;box-shadow:0 25px 70px rgba(0,0,0,.55);transition:.4s ease;text-align:left;}
.glass-card:hover{transform:translateY(-12px);box-shadow:0 35px 100px rgba(0,224,255,.3);}
.glass-card img{border-radius:15px;margin-bottom:15px;}

/* BUTTONS */
.btn-primary{background:linear-gradient(90deg,var(--primary),var(--accent));border:none;border-radius:50px;padding:14px 40px;box-shadow:0 15px 45px rgba(0,224,255,.45);}
.btn-outline-light{border-radius:50px;padding:14px 40px;}

/* CTA */
.cta{background:radial-gradient(circle at center,rgba(0,224,255,.25),transparent 70%),linear-gradient(to bottom,var(--deep),var(--abyss));text-align:center;}

/* FOOTER */
footer{background:#01040d;border-top:1px solid rgba(255,255,255,.08);padding:70px 20px;text-align:center;color:rgba(255,255,255,.6);}

/* ICONS IN CARDS */
.card-icon{font-size:36px;color:var(--accent);margin-bottom:15px;}

/* RESPONSIVE */
@media(max-width:768px){.hero h1{font-size:40px;}.glass-card{padding:25px;}}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">FameOceans</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Talents</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero text-center">
  <div class="container">
    <h1>Discover, Connect & Grow</h1>
    <h1>With Global Talent</h1>
    <p>FameOceans is a global platform designed to help talents, businesses, and creators connect across borders.</p>
    <div class="mt-4">
      <a class="btn btn-primary me-3"><i class="fa fa-rocket me-2"></i>Get Started</a>
      <a class="btn btn-outline-light"><i class="fa fa-eye me-2"></i>Explore Talents</a>
    </div>
    <!-- Hero image -->
    <img src="{{ asset('images/hero.jpg') }}" alt="Global Talent" class="img-fluid mt-5 rounded shadow-lg">
  </div>
</section>

<!-- FEATURES -->
<section>
  <div class="container text-center">
    <h2 class="section-title">What We Offer</h2>
    <p class="section-subtitle">Powerful tools and connections designed to elevate talent visibility and business collaboration worldwide.</p>
    <div class="row g-4 mt-5">
      <div class="col-md-4">
        <div class="glass-card text-center">
          <i class="fa fa-users card-icon"></i>
          <h4>Talent Discovery</h4>
          <p>Find and showcase talents from different industries and regions with ease.</p>
          <img src="{{ asset('images/talent1.jpg') }}" alt="Talent Discovery">
        </div>
      </div>
      <div class="col-md-4">
        <div class="glass-card text-center">
          <i class="fa fa-network-wired card-icon"></i>
          <h4>Global Networking</h4>
          <p>Connect creators, brands, and investors on a single trusted platform.</p>
          <img src="{{ asset('images/network.jpg') }}" alt="Networking">
        </div>
      </div>
      <div class="col-md-4">
        <div class="glass-card text-center">
          <i class="fa fa-chart-line card-icon"></i>
          <h4>Growth Opportunities</h4>
          <p>Unlock collaborations, sponsorships, and career-defining opportunities.</p>
          <img src="{{ asset('images/growth.jpg') }}" alt="Growth">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <h2 class="section-title">Why FameOceans?</h2>
        <p>We believe talent has no borders. FameOceans bridges gaps and provides a trusted digital space where creativity meets opportunity.</p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/about.jpg') }}" alt="About FameOceans" class="img-fluid rounded shadow-lg">
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta text-center">
  <div class="container">
    <h2 class="section-title">Join the Ocean of Opportunity</h2>
    <p class="section-subtitle">Start your journey today and be part of a growing global community.</p>
    <a class="btn btn-primary mt-4"><i class="fa fa-user-plus me-2"></i>Create Your Account</a>
    <img src="{{ asset('images/cta.jpg') }}" alt="Join Community" class="img-fluid mt-4 rounded shadow-lg">
  </div>
</section>

<!-- FOOTER -->
<footer>
  © 2026 FameOceans. All rights reserved.<br>
  Connecting talent beyond borders.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js"></script>
</body>
</html>
