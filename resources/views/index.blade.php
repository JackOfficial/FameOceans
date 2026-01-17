<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FameOceans | Global Talent Platform</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    :root {
      --dark: #050b1e;
      --dark-2: #0b1638;
      --primary: #3a7bfd;
      --secondary: #00e0ff;
      --text: #cfd6ff;
      --white: #ffffff;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top, #0f1f52, #050b1e 60%);
      color: var(--text);
    }

    header {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      background: linear-gradient(90deg, rgba(5,11,30,0.9), rgba(11,22,56,0.9));
      backdrop-filter: blur(10px);
    }

    .nav {
      max-width: 1200px;
      margin: auto;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      font-size: 24px;
      font-weight: 700;
      color: var(--white);
      letter-spacing: 1px;
    }

    nav a {
      margin-left: 30px;
      text-decoration: none;
      color: var(--text);
      font-size: 14px;
    }

    nav a:hover { color: var(--secondary); }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 160px 20px 120px;
      background:
        radial-gradient(circle at 70% 20%, rgba(58,123,253,0.35), transparent 60%),
        radial-gradient(circle at 30% 80%, rgba(0,224,255,0.25), transparent 55%);
    }

    .hero h1 {
      font-size: 58px;
      font-weight: 700;
      line-height: 1.2;
      background: linear-gradient(90deg, #ffffff, #a9b7ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 25px;
    }

    .hero p {
      max-width: 720px;
      margin: auto;
      font-size: 18px;
      opacity: 0.9;
    }

    .hero-actions {
      margin-top: 45px;
    }

    .btn {
      display: inline-block;
      padding: 16px 36px;
      border-radius: 40px;
      text-decoration: none;
      font-size: 14px;
      letter-spacing: 1px;
      margin: 10px;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: var(--white);
      box-shadow: 0 10px 40px rgba(58,123,253,0.35);
    }

    .btn-outline {
      border: 1px solid rgba(255,255,255,0.3);
      color: var(--white);
    }

    .btn:hover { transform: translateY(-3px); }

    section {
      padding: 120px 20px;
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }

    .section-title {
      text-align: center;
      margin-bottom: 80px;
    }

    .section-title h2 {
      font-size: 42px;
      color: var(--white);
    }

    .section-title p {
      max-width: 600px;
      margin: 20px auto 0;
      opacity: 0.8;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 40px;
    }

    .card {
      background: linear-gradient(180deg, rgba(255,255,255,0.05), rgba(255,255,255,0));
      border: 1px solid rgba(255,255,255,0.08);
      padding: 45px 35px;
      border-radius: 20px;
      backdrop-filter: blur(20px);
      transition: transform 0.3s ease;
    }

    .card:hover { transform: translateY(-8px); }

    .card h3 {
      color: var(--white);
      margin-bottom: 15px;
    }

    .cta {
      text-align: center;
      background: radial-gradient(circle at center, rgba(58,123,253,0.25), transparent 60%);
    }

    footer {
      padding: 60px 20px;
      text-align: center;
      font-size: 14px;
      opacity: 0.7;
    }

    @media (max-width: 768px) {
      .hero h1 { font-size: 40px; }
    }

    & when not (@fullScreen) {
  padding-top: (@paddingTop * 1rem);
  padding-bottom: (@paddingBottom * 1rem);
}
& when (@bg-type = 'color') {
  background-color: @bg-value;
}
& when (@bg-type = 'image') {
  background-image: url(@bg-value);
}
.mbr-fallback-image.disabled {
  display: none;
}
.mbr-fallback-image {
  display: block;
  background-size: cover;
  background-position: center center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  & when (@bg-type = 'video') {
    background-image: url(@fallBackImage);
  }
}
.google-map {
  position: relative;
  & when (@showBorder) {
    margin-bottom: 56px;
    @media (max-width: 992px) {
      margin-bottom: 32px;
    }
    &::before {
      content: '';
      position: absolute;
      bottom: -56px;
      left: 0;
      background-image: linear-gradient(90deg, transparent, @border_1, @border_2, transparent);
      height: 1px;
      width: 100%;
      @media (max-width: 992px) {
        bottom: -32px;
      }
    }
  }
  iframe {
    height: 700px;
    filter: invert(1);
    @media (max-width: 992px) {
      height: 350px;
    }
  }
}
  </style>
</head>
<body>

<header>
  <div class="nav">
    <div class="logo">FameOceans</div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Talents</a>
      <a href="#">Contact</a>
    </nav>
  </div>
</header>

<section class="hero">
  <div class="container">
    <h1>FameOceans: Your</h1>
    <h1>Business Compass</h1>
    <p>We steer your enterprise through choppy waters to profitable shores. Let's make waves!</p>
    <div class="hero-actions">
      <a href="#" class="btn btn-primary">Get Started</a>
      <a href="#" class="btn btn-outline">Explore Talent</a>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Ocean Insights</h2>
      <h2>Designed for visibility, credibility, and opportunity.</h2>
    </div>
    <div class="grid">
      <div class="card"><h3>Mobility Moves</h3><p class="text-light">Showcase your talent on an international stage.</p></div>
      <div class="card"><h3>Global Market Tides</h3><p class="text-light">Elevate your influence and digital identity.</p></div>
      <div class="card"><h3>Cultural Currents</h3><p class="text-light">Connect with brands, sponsors, and collaborators.</p></div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-title">
      <h2>Our Treasure Chest</h2>
      <p>Designed for visibility, credibility, and opportunity.</p>
    </div>
    <div class="grid">
      <div class="card"><h3>Consult</h3><p class="text-light">We dissect your business problems like a pirate with a map. Solutions incoming!</p></div>
      <div class="card"><h3>Culture</h3><p class="text-light">Bridging worlds, one handshake at a time. Get ready for global connections.</p></div>
      <div class="card"><h3>Invest</h3><p class="text-light">We find the gold mines for your capital. Let your money swim in profit.</p></div>
    </div>
  </div>
</section>

<section>
  <div class="container">
  <h2>Ready to Conquer the Business Ocean?</h2>
      <p>Stop treading water. Let fameOceans Corporation guide your ship to unparalleled success. Your fortune awaits!</p>
  </div>
  <button class="mt-2 btn btn-outline-light  btn-rounded d-block mx-auto">Set Sail</button>
</section>

<section>
  <div class="container">
    <div class="row">
<div class="col-md-6">
    <h2>Why Us?</h2>
<p>We're not your average consultants. We bring the wild, the bold, and the profitable. Prepare for impact.</p>
 <button class="mt-2 btn btn-light  btn-rounded d-block mx-auto">Learn More</button>
</div>
<div class="col-md-6">
<img src="{{ asset('images/office.jpeg') }}" alt="" class="w-100">
</div>
    </div>
</section>

<section class="cta">
  <div class="container">
    <div class="section-title">
      <h2>fameOceans: Your Partner in</h2>
      <h2>Global Ambition</h2>
      <h3>From boardroom strategies to cross-cultural triumphs, we make global business feel like a tropical vacation.</h3>
      <h4>We handle the complexities so you can enjoy the rewards. Let's make your global dreams a reality.</h4>
    </div>
    <a href="#" class="btn btn-primary">Connect Now</a>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
     <a href="">Consultancy</a>
      <a href="">Exchange</a>
       <a href="">Mobility</a>
        <a href="">Growth</a>
        <a href="">Vision</a>
      </div>
      <div class="col-md-6">
    <img src="{{ asset('images/continents.jpeg') }}" alt="">
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
    <h2>Our Prowess</h2>
      </div>
      <div class="col-md-6">
    <div>
      <h3>Business Brains</h3>
      <p>We dissect your business puzzles with razor-sharp intellect. Get ready for solutions that actually work, not just fancy jargon.</p>
    </div>

     <div>
      <h3>Money Moves</h3>
      <p>Your capital deserves a vacation. We guide it to greener pastures where it can multiply like rabbits.</p>
    </div>

    <div>
      <h3>Global Reach</h3>
      <p>Expand your horizons. We help you plant your flag on new continents, no passport required for your cash.</p>
    </div>

      </div>
    </div>
  </div>
</section>

<section data-bs-version="5.1" class="map01 emblemm5" group="Contact" mbr-class="{
    'mbr-fullscreen': fullScreen,
    'mbr-parallax-background': bg.parallax}">
    <mbr-parameters>
        <header>Size</header>
        <input type="checkbox" title="Full Screen" name="fullScreen">
        <input type="checkbox" title="Full Width" name="fullWidth">
        <input type="range" inline title="Top" name="paddingTop" min="0" max="12" step="1" value="5" condition="fullScreen == false">
        <input type="range" inline title="Bottom" name="paddingBottom" min="0" max="12" step="1" value="5" condition="fullScreen == false">
        <header>Map</header>
        <input type="map" title="Map" name="googleMap" value="<iframe src=&quot;https://www.google.com/maps/embed/v1/place?key&#x3D;AIzaSyCt1265A4qvZy9HKUeA8J15AOC4SrCyZe4&amp;q&#x3D;%20Rwanda&quot;></iframe>" place-id="<iframe src=&quot;https://www.google.com/maps/embed/v1/place?key&#x3D;AIzaSyCt1265A4qvZy9HKUeA8J15AOC4SrCyZe4&amp;q&#x3D;%20Rwanda&quot;></iframe>">
        <header>Show/Hide</header>
        <input type="checkbox" title="Border Bottom" name="showBorder" checked>
        <input type="color" title="Border Gradient 1" value="#4EA3A4" name="border_1" selected>
        <input type="color" title="Border Gradient 2" value="#845655" name="border_2" selected>
        <header>Background</header>
        <fieldset type="background" name="bg" parallax>
            <input type="image" title="Image" value="../_images/background1.jpg">
            <input type="color" title="Color" value="#001819" selected>
        </fieldset>
        <header condition="bg.type === 'video'">Fallback Image</header>
        <input type="image" title="Fallback Image" value="../_images/background1.jpg" name="fallBackImage" condition="bg.type === 'video'">
        <input type="checkbox" title="Overlay" name="overlay" condition="bg.type !== 'color'">
        <input type="color" title="Overlay Color" name="overlayColor" value="#000000" condition="overlay && bg.type !== 'color'">
        <input type="range" inline title="Opacity" name="overlayOpacity" min="0" max="1" step="0.1" value="0.5" condition="overlay && bg.type !== 'color'">
    </mbr-parameters>

    <div class="mbr-fallback-image disabled" mbr-if="bg.type == 'video'"></div>
    <div class="mbr-overlay" mbr-if="overlay && bg.type !== 'color'" opacity="{{overlayOpacity}}" bg-color="{{overlayColor}}"></div>

    <div mbr-class="{'container': !fullWidth, 'container-fluid': fullWidth}">
        <div class="row">
            <div class="col-12">
                <div class="google-map" mbr-map="googleMap"></div>
            </div>
        </div>
    </div>
</section>

<footer>
  © FameOceans. All Rights Reserved.
</footer>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
