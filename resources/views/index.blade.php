<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FameOceans | Discover, Connect & Grow Talent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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

*{box-sizing:border-box;margin:0;padding:0;}

body{
  font-family:'Poppins',sans-serif;
  color:var(--text);
  background:linear-gradient(to bottom,var(--surface),var(--mid) 35%,var(--deep) 70%,var(--abyss));
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
  letter-spacing:1px;
  background:linear-gradient(90deg,#fff,var(--accent));
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.nav-link{
  color:var(--text)!important;
  margin-left:20px;
  font-size:14px;
  transition:color .3s;
}
.nav-link:hover{color:var(--accent)!important}

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
  padding-top:120px;
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
.hero .btn{
  margin:10px 5px;
}

/* =======================
   SECTIONS
======================= */
section{
  padding:120px 20px;
}
.section-title{
  font-size:42px;
  font-weight:700;
  background:linear-gradient(90deg,#fff,#9adfff);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
  text-align:center;
}
.section-subtitle{
  max-width:700px;
  margin:20px auto 0;
  color:var(--muted);
  font-size:17px;
  text-align:center;
}

/* =======================
   GLASS CARDS
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

/* =======================
   RESPONSIVE
======================= */
@media(max-width:768px){
  .hero h1{font-size:40px;}
  .glass-card{padding:25px;}
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">FameOceans</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
      aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Talents</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
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
    <div>
      <a class="btn btn-primary me-3" href="#">Get Started</a>
      <a class="btn btn-outline-light" href="#">Explore Talents</a>
    </div>
  </div>
</section>

<!-- FEATURES / OCEAN INSIGHTS -->
<section>
  <div class="container">
    <h2 class="section-title">Ocean Insights</h2>
    <p class="section-subtitle">Designed for visibility, credibility, and opportunity.</p>
    <div class="row g-4 mt-5">
      <div class="col-md-4"><div class="glass-card"><h4>Mobility Moves</h4><p>Showcase your talent on an international stage.</p></div></div>
      <div class="col-md-4"><div class="glass-card"><h4>Global Market Tides</h4><p>Elevate your influence and digital identity.</p></div></div>
      <div class="col-md-4"><div class="glass-card"><h4>Cultural Currents</h4><p>Connect with brands, sponsors, and collaborators.</p></div></div>
    </div>
  </div>
</section>

<!-- TREASURE CHEST -->
<section>
  <div class="container">
    <h2 class="section-title">Our Treasure Chest</h2>
    <p class="section-subtitle">Strategic services designed to unlock global success.</p>
    <div class="row g-4 mt-5">
      <div class="col-md-4"><div class="glass-card"><h4>Consult</h4><p>Strategic guidance that turns complexity into clarity.</p></div></div>
      <div class="col-md-4"><div class="glass-card"><h4>Culture</h4><p>Cross-cultural connections that open global doors.</p></div></div>
      <div class="col-md-4"><div class="glass-card"><h4>Invest</h4><p>Identify high-impact opportunities beyond borders.</p></div></div>
    </div>
  </div>
</section>

<!-- ABOUT / WHY CHOOSE US -->
<section>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <h2 class="section-title">Why Choose FameOceans?</h2>
        <p>We blend strategy, culture, and opportunity into a powerful global advantage.</p>
        <a class="btn btn-outline-light mt-3" href="#">Learn More</a>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('images/office.jpeg') }}" alt="Office" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta">
  <div class="container">
    <h2 class="section-title">FameOceans: Your Partner in Global Ambition</h2>
    <p class="section-subtitle">From boardroom strategies to cross-cultural triumphs, we make global business seamless.</p>
    <a href="#" class="btn btn-primary mt-3">Connect Now</a>
  </div>
</section>

<!-- MORE SECTIONS FOLLOW ORIGINAL HOMEPAGE -->
<!-- Include all other sections exactly like your original design, using images, glass cards, video, testimonials, and forms. -->

<!-- FOOTER -->
<footer>
  © {{ date('Y') }} FameOceans Corporation. All rights reserved.
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
