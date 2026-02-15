@extends('layouts.app')
@section('content')
<!-- HERO -->
<section x-data="{ 
    activeSlide: 0, 
    slides: [
        { 
            label: 'STRATEGIC ADVISORY',
            title: 'Business Consultancy', 
            text: 'We dissect complex business puzzles with razor-sharp intellect to yield extraordinary results.',
            img: '{{ asset('images/Stratetic investment opportunities in Africa.png') }}',
            link: '#our-services'
        },
        { 
            label: 'GLOBAL CONNECTIVITY',
            title: 'Cultural Exchange', 
            text: 'Bridging worlds and opening doors you didn’t even know existed through global connections.',
            img: '{{ asset('images/Employment opportunities in UAE.png') }}',
            link: '#explore'
        },
        { 
            label: 'ELITE TRANSITION',
            title: 'Global Mobility', 
            text: 'Seamlessly transition across borders with expert compliance and settlement support.',
            img: '{{ asset('images/Bridging workforce into UAE.png') }}',
            link: '#mobility'
        }
    ],
    next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length },
    prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length },
    init() { setInterval(() => this.next(), 7000) } 
}" class="p-0 vh-100 position-relative d-flex align-items-center overflow-hidden">

    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="activeSlide === index" 
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 scale-110"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-1000"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="position-absolute top-0 start-0 w-100 h-100">
            <div class="w-100 h-100" 
                 :style="`background: linear-gradient(to right, rgba(2, 6, 17, 0.9), rgba(2, 6, 17, 0.3)), url('${slide.img}') no-repeat center center/cover;`"
            ></div>
        </div>
    </template>

    <div class="position-absolute top-50 start-0 translate-middle-y ms-5 d-none d-xl-block" style="z-index: 5; opacity: 0.1;">
        <i class="fas fa-water fa-10x text-white"></i>
    </div>

    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center">
            <div class="col-lg-8 text-start">
                <template x-for="(slide, index) in slides" :key="index">
                    <div x-show="activeSlide === index"
                         x-transition:enter="transition ease-out delay-300 duration-700"
                         x-transition:enter-start="opacity-0 translate-middle-y"
                         x-transition:enter-end="opacity-100 translate-none">
                        
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge rounded-pill px-3 py-2 me-3" style="background: rgba(0, 224, 255, 0.15); color: var(--accent); border: 1px solid var(--accent); letter-spacing: 2px; font-size: 12px;" x-text="slide.label"></span>
                            <div style="height: 1px; width: 50px; background: var(--accent);"></div>
                        </div>

                        <h1 class="display-1 fw-bold mb-4" style="background: linear-gradient(90deg, #fff, #9adfff, var(--primary)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;" x-text="slide.title"></h1>
                        
                        <p class="fs-4 mb-5 opacity-75" style="max-width: 600px; line-height: 1.6;" x-text="slide.text"></p>
                        
                        <div class="d-flex flex-wrap gap-3">
                            <a :href="slide.link" class="btn btn-primary btn-lg shadow-lg">
                                <i class="fas fa-ship me-2"></i>Get Started
                            </a>
                            <a href="#" class="btn btn-outline-light btn-lg glass-card border-0">
                                Explore Services
                            </a>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <div class="position-absolute bottom-0 end-0 p-4 p-md-5 d-flex align-items-center gap-4" style="z-index: 20;">
        <div class="d-flex gap-2">
            <template x-for="(slide, index) in slides" :key="index">
                <button @click="activeSlide = index" 
                        class="border-0 rounded-circle" 
                        :style="activeSlide === index ? 'width: 40px; background: var(--accent);' : 'width: 12px; background: rgba(255,255,255,0.3);'"
                        style="height: 12px; transition: all 0.4s ease;"></button>
            </template>
        </div>
        <div class="d-flex gap-2 ms-3">
            <button @click="prev()" class="btn btn-outline-light rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button @click="next()" class="btn btn-outline-light rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.1);">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<!-- CTA SECTION: Ocean Vibe -->
<section class="cta py-5" style="position: relative; overflow: hidden; background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.4));">
  <div class="container">
    <div class="row align-items-center g-5">

      <!-- TEXT COLUMN -->
      <div class="col-lg-6 text-light text-center text-lg-start">
        <!-- Icon -->
        <i class="fas fa-water fa-3x mb-3" style="color: var(--accent);"></i>

        <!-- Headings -->
        <h2 class="display-5 fw-bold mb-2" style="background: linear-gradient(90deg,#9adfff,#3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          FameOceans: Your Partner in
        </h2>
        <h2 class="display-5 fw-bold mb-3" style="background: linear-gradient(90deg,#00e0ff,#3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Global Ambition
        </h2>

        <!-- Subtext -->
        <h3 class="mb-3" style="font-weight:500; color: rgba(227,233,255,0.85);">
          We provide strategic advisory from the initial concept, shaping your project to align with the requirements of your chosen destination.
        </h3>
        <h4 class="mb-4" style="font-weight:400; color: rgba(227,233,255,0.75);">
          We support compliance with relevant authorities and embassies for visa processes, while ensuring a smooth and well-prepared settlement abroad.
        </h4>

        <!-- CTA Button -->
        <a href="#" class="btn btn-primary btn-lg shadow-lg px-5 py-3" style="font-size: 18px; background: linear-gradient(90deg,#3a7bfd,#00e0ff); transition: all 0.3s;">
          <i class="fas fa-ship me-2"></i>Connect Now
        </a>
      </div>

      <!-- IMAGE COLUMN -->
      <div class="col-lg-6 text-center">
        <div class="position-relative">
          <img src="{{ asset('images/Consultancy.jpeg') }}" 
               alt="Global Advisory" 
               class="img-fluid rounded shadow-lg"
               style="max-height: 450px; object-fit: cover;">
          <!-- Decorative accent circle -->
          <div style="position:absolute; top:10%; left:10%; width:60px; height:60px; background: rgba(0,224,255,0.3); border-radius:50%;"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TREASURE CHEST -->
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


<section style="position: relative; background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)), url('{{ asset('images/about-bg.jpg') }}') no-repeat center center/cover; padding: 120px 0;">
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
          <img src="{{ asset('images/focus.jpeg') }}" alt="Future Focus" class="img-fluid rounded mb-3">
          <h4>Future Focus</h4>
          <p>We're always looking ahead. Get strategies that position you for tomorrow's triumphs, not yesterday's trends.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/Business brain.jpeg') }}" alt="Future Focus" class="img-fluid rounded mb-3">
          <h4>Business Brains</h4>
          <p>We dissect your business puzzles with razor-sharp intellect. Get ready for solutions that actually work, not just fancy jargon.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/money1.jpg') }}" alt="Future Focus" class="img-fluid rounded mb-3">
          <h4>Money Moves</h4>
          <p>Your capital deserves a vacation. We guide it to greener pastures where it can multiply like rabbits.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card text-center">
          <!-- Image on top -->
          <img src="{{ asset('images/Global reach.jpeg') }}" alt="Future Focus" class="img-fluid rounded mb-3">
          <h4>Global Reach</h4>
          <p>Expand your horizons. We help you plant your flag on new continents, no passport required for your cash.</p>
          <button class="btn btn-sm btn-primary mt-2">Connect</button>
        </div>
      </div>

    </div>
  </div>
</section>

<section>
  <div class="container text-center">
    <h2 class="section-title mb-2">Our Impact</h2>
    <p class="section-subtitle mb-5">Numbers that reflect trust and results.</p>

    <div class="row g-4 justify-content-center">
      
      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale">
          <h2 class="display-4 fw-bold text-primary mb-2">99+</h2>
          <p class="fw-semibold">Client Wins</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale">
          <h2 class="display-4 fw-bold text-primary mb-2">1K+</h2>
          <p class="fw-semibold">Connections Made</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale">
          <h2 class="display-4 fw-bold text-primary mb-2">50+</h2>
          <p class="fw-semibold">Projects Launched</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale">
          <h2 class="display-4 fw-bold text-primary mb-2">10+</h2>
          <p class="fw-semibold">Years of Excellence</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section style="position: relative; background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)); padding: 80px 0;">
  <div class="container text-center">
    <h2 class="section-title mb-5">What People Say</h2>

    <div class="row g-4 justify-content-center">

      <div class="col-md-4">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card">
          <p class="mb-4 fst-italic">
            “FameOceans transformed our global strategy.
            Their insights are sharp and effective.”
          </p>
          <strong>Alex Johnson</strong><br>
          <small class="text-muted">CEO</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card">
          <p class="mb-4 fst-italic">
            “The cultural exchange experience opened doors
            I never imagined possible.”
          </p>
          <strong>Maria Chen</strong><br>
          <small class="text-muted">Entrepreneur</small>
        </div>
      </div>

      <div class="col-md-4">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card">
          <p class="mb-4 fst-italic">
            “Smart investments, global reach,
            and professional execution.”
          </p>
          <strong>David Okello</strong><br>
          <small class="text-muted">Investor</small>
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
    <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Ready for Glory?
        </div>

    <!-- Main headings -->
    <h2 class="display-5 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Let's Make It Happen
    </h2>

    <p class="mx-auto mb-4" style="color: rgba(227,233,255,0.85);">
     Stop dreaming, start doing. FameOceans is your launchpad to international acclaim and financial freedom.
    </p>

     <a href="#" class="btn btn-primary btn-lg shadow-lg">
          <i class="fa fa-rocket me-2"></i>Get Started
        </a>

  </div>
</section>

@endsection