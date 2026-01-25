<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FameOceans | Discover, Connect & Grow Talent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon -->
<link href="{{ asset('images/FameOceans Logo.png') }}" rel="icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

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

.navbar-logo{
  height:42px;
  width:auto;
  object-fit:contain;
}

@media (max-width:768px){
  .navbar-logo{
    height:34px;
  }
}

.nav-link{
  color:var(--text)!important;
  margin-left:20px;
  font-size:14px;
}

.nav-link:hover{
  color:var(--accent)!important;
}

/* =======================
   SECTIONS
======================= */
section{
  padding:120px 0;
  position:relative;
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
   BUTTONS
======================= */
.btn-primary{
  background:linear-gradient(90deg,var(--primary),var(--accent));
  border:none;
  border-radius:50px;
  padding:14px 40px;
  box-shadow:0 15px 45px rgba(0,224,255,.45);
}

/* =======================
   FOOTER
======================= */
footer{
  background:#01040d;
  border-top:1px solid rgba(255,255,255,.08);
  padding:80px 0;
  color:rgba(227,233,255,0.8);
}
</style>

@livewireStyles
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
  <div class="container">

    <!-- LOGO IMAGE -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('images/FameOceans.png') }}"
           alt="FameOceans Logo"
           class="navbar-logo">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Talents</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
      </ul>
    </div>

  </div>
</nav>

@yield('content')

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="row g-4">

      <!-- BRAND -->
      <div class="col-md-4">
        <img src="{{ asset('images/FameOceans.png') }}"
             alt="FameOceans Logo"
             style="height:50px; margin-bottom:15px;">
        <p>Connecting talents, businesses, and opportunities across the oceans.</p>

        <div class="mt-3">
          <a href="#" class="me-3 text-light"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="me-3 text-light"><i class="fab fa-twitter"></i></a>
          <a href="#" class="me-3 text-light"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="me-3 text-light"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- LINKS -->
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Home</a></li>
          <li><a href="#" class="text-light text-decoration-none">About</a></li>
          <li><a href="#" class="text-light text-decoration-none">Services</a></li>
          <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
        </ul>
      </div>

      <!-- NEWSLETTER -->
      <div class="col-md-4">
        <h5>Join the Wave</h5>
        <p>Subscribe for updates and opportunities.</p>
        <form class="d-flex">
          <input type="email" class="form-control me-2 rounded-pill" placeholder="Your email">
          <button class="btn btn-primary rounded-pill">
            <i class="fas fa-paper-plane"></i>
          </button>
        </form>
      </div>

    </div>

    <div class="text-center mt-5 pt-4 border-top border-light border-opacity-25">
      &copy; 2026 FameOceans. All rights reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 @livewireScripts
</body>
</html>
