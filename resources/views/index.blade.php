@extends('layouts.app')
@push('styles')
<style>
  /* Mobile Horizontal Scroll */
@media (max-width: 767px) {
    .hide-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        padding-bottom: 20px; /* Space for the cards to breathe */
    }
    .hide-scrollbar::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
    }
}

/* Image Zoom Effect */
.zoom-img {
    transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
}

.glass-card:hover .zoom-img {
    transform: scale(1.15);
}

/* Button & Card Hover Polishing */
.hover-accent-btn {
    border-color: var(--accent) !important;
    color: var(--accent) !important;
    transition: all 0.3s ease;
}

.hover-accent-btn:hover {
    background: var(--accent) !important;
    color: var(--deep) !important;
    box-shadow: 0 0 15px var(--accent);
}

.glass-card {
    transition: border-color 0.3s ease, transform 0.3s ease;
}

.glass-card:hover {
    border-color: rgba(0, 224, 255, 0.4) !important;
}

#why-choose-us .text-muted {
    color: rgba(227, 233, 255, 0.95) !important; /* Brighter than standard muted */
    font-weight: 300;
}

#why-choose-us h4 {
    color: #ffffff !important;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3); /* Subtle depth */
}

/* Add a bit more "white" to the glass background for better contrast */
#why-choose-us .glass-card {
    background: rgba(255, 255, 255, 0.07) !important; 
    border: 1px solid rgba(255, 255, 255, 0.15) !important;
}

.testimonial-card {
    transition: all 0.4s ease !important;
}

.testimonial-card:hover {
    transform: translateY(-10px) scale(1.02);
    border-color: var(--accent) !important;
    background: rgba(255, 255, 255, 0.08) !important;
    box-shadow: 0 20px 40px rgba(0, 224, 255, 0.2) !important;
}

/* Fix for mobile scroll visibility */
.hide-scrollbar {
    padding-left: 15px;
    padding-right: 15px;
}

@keyframes breathe {
    0% {
        transform: scale(1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    50% {
        transform: scale(1.05);
        /* Intense oceanic glow shadow */
        box-shadow: 0 0 30px rgba(0, 224, 255, 0.6), 0 0 60px rgba(0, 224, 255, 0.2);
    }
    100% {
        transform: scale(1);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
}

.btn-breathing {
    animation: breathe 3s ease-in-out infinite;
    transition: all 0.4s ease;
    /* Prevents "jiggle" and layout-shifting scrollbars */
    backface-visibility: hidden;
    -webkit-font-smoothing: subpixel-antialiased;
    will-change: transform, box-shadow;
}

/* Ensure the main section kills any potential horizontal scroll */
#final-cta {
    overflow-x: hidden !important;
}

/* Hover state: hold the breath and change color */
.btn-breathing:hover {
    animation-play-state: paused;
    transform: translateY(-5px) scale(1.08) !important;
    background: var(--accent) !important;
    color: #fff !important;
    box-shadow: 0 15px 40px rgba(0, 224, 255, 0.5) !important;
}

</style>
@endpush
@section('content')
<!-- HERO -->
<section x-data="{ 
    activeSlide: 0, 
    slides: [
        { 
            label: 'STRATEGIC ADVISORY',
            title: 'Business Consultancy', 
            text: 'We dissect complex business puzzles with razor-sharp intellect to yield extraordinary results.',
            img: '{{ asset('images/Workforce mobility in GCC.png') }}',
            link: '/services'
        },
        { 
            label: 'GLOBAL CONNECTIVITY',
            title: 'Cross-cultural Integration', 
            text: 'Reducing Hiring Risk Across the UAE Market Through Structured and Regulated Workforce Alignment.',
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
         Strategic Workforce
        </h2>
        <h2 class="display-5 fw-bold mb-3" style="background: linear-gradient(90deg,#00e0ff,#3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
         Smart Capital
        </h2>

        <!-- Subtext -->
        <h4 class="mb-3" style="font-weight:500; color: rgba(227,233,255,0.85);">
          FameOceans structures compliant workforce mobility and strategic investment corridors between Africa, the Gulf, and Europe.
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
    <h2 class="section-title">Our Strategic Pillars</h2>
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
          <p>We find the yield-Driven Opportunities for your capital. Let your money swim in profit.</p>
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


<section id="why-choose-us" 
    x-data="{ shown: false }" 
    x-intersect.half="shown = true" 
    style="position: relative; background: var(--deep); padding: 120px 0;">
    
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">Why Choose FameOceans?</h2>
            <p class="section-subtitle" style="color: var(--muted); max-width: 600px; margin: 0 auto;">
                Strategic services designed to unlock global success.
            </p>
        </div>

        <div class="row g-4 mt-2 flex-nowrap overflow-auto hide-scrollbar flex-md-wrap">
            
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Bold Moves.jpeg') }}" alt="Bold Moves" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Bold Moves</h4>
                        <p class="small text-muted mb-4">We don't play it safe. We make audacious recommendations that yield extraordinary results. Prepare for impact.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-100">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Global Network.jpeg') }}" alt="Global Network" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Global Network</h4>
                        <p class="small text-muted mb-4">Our connections span the globe. We open doors you didn't even know existed, leading to unparalleled opportunities.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-200">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/focus.jpeg') }}" alt="Future Focus" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Future Focus</h4>
                        <p class="small text-muted mb-4">We're always looking ahead. Get strategies that position you for tomorrow's triumphs, not yesterday's trends.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-300">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Business brain.jpeg') }}" alt="Business Brains" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Business Brains</h4>
                        <p class="small text-muted mb-4">We dissect your business puzzles with razor-sharp intellect. Get ready for solutions that actually work.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-400">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/money1.jpg') }}" alt="Money Moves" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Money Moves</h4>
                        <p class="small text-muted mb-4">Your capital deserves a vacation. We guide it to greener pastures where it can multiply like rabbits.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-500">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Global reach.jpeg') }}" alt="Global Reach" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Global Reach</h4>
                        <p class="small text-muted mb-4">Expand your horizons. We help you plant your flag on new continents, no passport required for your cash.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Connect</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-5" x-data="{ 
    started: false,
    checkScroll() {
        if (!this.started && window.scrollY + window.innerHeight > $el.offsetTop) {
            this.started = true;
        }
    }
}" x-on:scroll.window="checkScroll()">
  <div class="container text-center">
    <h2 class="section-title mb-2">Our Impact</h2>
    <p class="section-subtitle mb-5">Numbers that reflect trust and results.</p>

    <div class="row g-4 justify-content-center">
      
      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale" 
             x-data="{ count: 0, target: 99 }" 
             x-init="$watch('started', value => {
                if (value) {
                    let interval = setInterval(() => {
                        if (count < target) count++;
                        else clearInterval(interval);
                    }, 20);
                }
             })">
          <h2 class="display-4 fw-bold text-primary mb-2">
            <span x-text="count">0</span>+
          </h2>
          <p class="fw-semibold">Client Wins</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale" 
             x-data="{ count: 0, target: 1000 }" 
             x-init="$watch('started', value => {
                if (value) {
                    let step = target / 50; 
                    let interval = setInterval(() => {
                        if (count < target) count = Math.ceil(count + step);
                        else { count = target; clearInterval(interval); }
                    }, 30);
                }
             })">
          <h2 class="display-4 fw-bold text-primary mb-2">
            <span x-text="count">0</span>+
          </h2>
          <p class="fw-semibold">Connections Made</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale" 
             x-data="{ count: 0, target: 50 }" 
             x-init="$watch('started', value => {
                if (value) {
                    let interval = setInterval(() => {
                        if (count < target) count++;
                        else clearInterval(interval);
                    }, 40);
                }
             })">
          <h2 class="display-4 fw-bold text-primary mb-2">
            <span x-text="count">0</span>+
          </h2>
          <p class="fw-semibold">Projects Launched</p>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="glass-card py-4 px-3 shadow-lg rounded-4 h-100 hover-scale" 
             x-data="{ count: 0, target: 10 }" 
             x-init="$watch('started', value => {
                if (value) {
                    let interval = setInterval(() => {
                        if (count < target) count++;
                        else clearInterval(interval);
                    }, 150);
                }
             })">
          <h2 class="display-4 fw-bold text-primary mb-2">
            <span x-text="count">0</span>+
          </h2>
          <p class="fw-semibold">Years of Excellence</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="testimonials" 
    style="position: relative; background: linear-gradient(135deg, rgba(8, 27, 52, 0.95), rgba(4, 13, 28, 0.9)); padding: 100px 0; overflow: hidden;">
  
  <div class="container position-relative" style="z-index: 2;">
    
    <div class="text-center mb-5">
        <h2 class="section-title mb-2" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">What People Say</h2>
        <p class="section-subtitle mx-auto" style="color: var(--muted); max-width: 600px;">Voices of success from around the ocean.</p>
    </div>

    <div class="row g-4 flex-nowrap overflow-auto hide-scrollbar pb-4" style="scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;">

      <div class="col-10 col-md-4 flex-shrink-0" style="scroll-snap-align: start;">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card text-start border-0" 
             style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.1) !important;">
          
          <div class="d-flex mb-3 text-warning">
             <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
          </div>

          <p class="mb-4 fst-italic" style="color: #e3e9ff; line-height: 1.7; font-size: 1.1rem;">
            “FameOceans transformed our global strategy. Their insights are sharp, effective, and uniquely tailored to the GCC market.”
          </p>
          
          <div class="d-flex align-items-center">
            <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center text-white me-3" style="width: 45px; height: 45px; font-weight: bold;">AJ</div>
            <div>
              <strong style="color: #fff; display: block;">Alex Johnson</strong>
              <small style="color: var(--accent); text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">CEO, Global Ventures</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 flex-shrink-0" style="scroll-snap-align: start;">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card text-start border-0" 
             style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.1) !important;">
          
          <div class="d-flex mb-3 text-warning">
             <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
          </div>

          <p class="mb-4 fst-italic" style="color: #e3e9ff; line-height: 1.7; font-size: 1.1rem;">
            “The cultural exchange experience opened doors I never imagined possible. Truly a bridge between Africa and the world.”
          </p>
          
          <div class="d-flex align-items-center">
            <div class="rounded-circle bg-info d-flex align-items-center justify-content-center text-white me-3" style="width: 45px; height: 45px; font-weight: bold;">MC</div>
            <div>
              <strong style="color: #fff; display: block;">Maria Chen</strong>
              <small style="color: var(--accent); text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">Entrepreneur</small>
            </div>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 flex-shrink-0" style="scroll-snap-align: start;">
        <div class="glass-card p-4 shadow-lg rounded-4 h-100 testimonial-card text-start border-0" 
             style="background: rgba(255, 255, 255, 0.05); backdrop-filter: blur(15px); border: 1px solid rgba(255,255,255,0.1) !important;">
          
          <div class="d-flex mb-3 text-warning">
             <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
          </div>

          <p class="mb-4 fst-italic" style="color: #e3e9ff; line-height: 1.7; font-size: 1.1rem;">
            “Smart investments, global reach, and professional execution. My capital is safe and growing in the right corridors.”
          </p>
          
          <div class="d-flex align-items-center">
            <div class="rounded-circle d-flex align-items-center justify-content-center text-white me-3" style="width: 45px; height: 45px; font-weight: bold; background-color: var(--primary);">DO</div>
            <div>
              <strong style="color: #fff; display: block;">David Okello</strong>
              <small style="color: var(--accent); text-transform: uppercase; font-size: 11px; letter-spacing: 1px;">Investor</small>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="ocean-insights" style="background: var(--deep); padding: 100px 0;">
  <div class="container">
    <div class="text-center mb-5">
        <h2 class="section-title mb-2" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">Ocean Insights</h2>
        <p class="section-subtitle mx-auto" style="color: var(--muted); max-width: 600px;">Wisdom from the deep blue.</p>
    </div>

    <div class="row g-4 flex-nowrap overflow-auto hide-scrollbar pb-4 flex-md-wrap">

      <div class="col-10 col-md-4 flex-shrink-0 flex-md-shrink-1">
        <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
          <div class="position-relative overflow-hidden" style="height: 220px;">
            <img src="{{ asset('images/Bold Moves.jpeg') }}" alt="Mobility Moves" class="w-100 h-100 object-fit-cover zoom-img">
          </div>
          
          <div class="p-4 text-start">
            <h4 class="text-white fw-bold mb-2">Mobility Moves</h4>
            <small class="d-block mb-3" style="color: var(--accent); font-size: 0.75rem; letter-spacing: 0.5px;">
              <i class="fas fa-user me-1"></i>By Jane Doe &nbsp;|&nbsp; <i class="fas fa-calendar-alt me-1"></i>Jan 10, 2026
            </small>
            <p class="text-white-50 small mb-4">Showcase your talent on an international stage and explore career-defining opportunities worldwide.</p>
            <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">
                Read More <i class="fas fa-arrow-right ms-2" style="font-size: 0.7rem;"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 flex-shrink-0 flex-md-shrink-1">
        <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
          <div class="position-relative overflow-hidden" style="height: 220px;">
            <img src="{{ asset('images/global fame.jpeg') }}" alt="Global Market Tides" class="w-100 h-100 object-fit-cover zoom-img">
          </div>
          <div class="p-4 text-start">
            <h4 class="text-white fw-bold mb-2">Global Market Tides</h4>
            <small class="d-block mb-3" style="color: var(--accent); font-size: 0.75rem;">
              <i class="fas fa-user me-1"></i>By John Smith &nbsp;|&nbsp; <i class="fas fa-calendar-alt me-1"></i>Jan 15, 2026
            </small>
            <p class="text-white-50 small mb-4">Elevate your influence and digital identity, expanding your reach across global markets.</p>
            <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">
                Read More <i class="fas fa-arrow-right ms-2" style="font-size: 0.7rem;"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-10 col-md-4 flex-shrink-0 flex-md-shrink-1">
        <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
          <div class="position-relative overflow-hidden" style="height: 220px;">
            <img src="{{ asset('images/culture.jpeg') }}" alt="Cultural Currents" class="w-100 h-100 object-fit-cover zoom-img">
          </div>
          <div class="p-4 text-start">
            <h4 class="text-white fw-bold mb-2">Cultural Currents</h4>
            <small class="d-block mb-3" style="color: var(--accent); font-size: 0.75rem;">
              <i class="fas fa-user me-1"></i>By Maria Lee &nbsp;|&nbsp; <i class="fas fa-calendar-alt me-1"></i>Jan 20, 2026
            </small>
            <p class="text-white-50 small mb-4">Connect with brands, sponsors, and collaborators to expand your creative horizons globally.</p>
            <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">
                Read More <i class="fas fa-arrow-right ms-2" style="font-size: 0.7rem;"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="final-cta" style="
    position: relative; 
    background: linear-gradient(135deg, rgba(4, 13, 28, 0.9), rgba(8, 27, 52, 0.7)), url('{{ asset('images/ocean-cta.jpg') }}') no-repeat center center/cover;
    background-attachment: fixed; /* Parallax effect for depth */
    padding: 140px 0;
    overflow: hidden;
">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(4, 13, 28, 0.4); pointer-events: none;"></div>

  <div class="container text-center text-light position-relative" style="z-index: 2;">

    <div class="text-uppercase fw-bold mb-3" style="letter-spacing:4px; color: var(--accent); font-size:13px; opacity: 0.9;">
        Ready for Glory?
    </div>

    <h2 class="display-4 fw-bold mb-3" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Let's Make It Happen
    </h2>

    <p class="mx-auto mb-5" style="color: rgba(227,233,255,0.8); max-width: 550px; font-size: 1.1rem; line-height: 1.8;">
      Stop dreaming, start doing. FameOceans is your launchpad to international acclaim and financial freedom.
    </p>

<div class="d-flex justify-content-center gap-3 py-4" style="overflow: visible;">
    <a href="#" class="btn btn-lg rounded-pill px-5 py-3 shadow-lg btn-breathing" 
       style="background: #fff; color: var(--deep); font-weight: 700; border: none; font-size: 1rem; letter-spacing: 1px; position: relative; display: inline-block;">
        Get Started Now
    </a>
</div>

  </div>
</section>

@endsection