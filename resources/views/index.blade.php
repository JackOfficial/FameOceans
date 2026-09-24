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

.hover-glow:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px rgba(0, 224, 255, 0.4) !important;
    background: var(--accent) !important;
    color: #fff !important;
}

.group-hover-effect:hover h4 {
    color: var(--accent) !important;
    transition: color 0.3s ease;
}

/* Keep cards bordered, but pillars clean */
#why-choose-us .glass-card, #ocean-insights .glass-card {
    border: 1px solid rgba(255, 255, 255, 0.1) !important;
}

#our-services .pillar-item {
    border: none !important;
}

/* PARTNER CAROUSEL / TICKER STYLES */
.partner-ticker-wrapper {
  overflow: hidden;
  white-space: nowrap;
  width: 100%;
}

.partner-ticker-track {
  display: inline-flex;
  width: max-content;
  animation: partnerTicker 25s linear infinite;
}

/* Pause animation on hover for readability */
.partner-ticker-wrapper:hover .partner-ticker-track {
  animation-play-state: paused;
}

.partner-card {
  min-width: 260px;
  background: rgba(255, 255, 255, 0.03) !important;
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  cursor: pointer;
}

.partner-card:hover {
  transform: translateY(-5px);
  background: rgba(255, 255, 255, 0.08) !important;
  border-color: rgba(154, 223, 255, 0.4) !important;
  box-shadow: 0 10px 25px -5px rgba(58, 123, 253, 0.3);
}

/* Gradient Fade Effects on Left & Right Edges */
.ticker-overlay-left,
.ticker-overlay-right {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100px;
  z-index: 2;
  pointer-events: none;
}

.ticker-overlay-left {
  left: 0;
  background: linear-gradient(to right, rgba(10, 20, 35, 1), rgba(10, 20, 35, 0));
}

.ticker-overlay-right {
  right: 0;
  background: linear-gradient(to left, rgba(10, 20, 35, 1), rgba(10, 20, 35, 0));
}

/* Continuous Marquee Animation Keyframes */
@keyframes partnerTicker {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
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
                            <a :href="slide.link" class="btn btn-lg rounded-pill px-5 py-3 shadow-lg" 
                  style="background: #fff; color: var(--deep); font-weight: 700; border: none; font-size: 1rem; letter-spacing: 1px;">
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

<section class="cta" id="strategic-cta" style="position: relative; background: var(--deep); padding: 100px 0; overflow: hidden;">
  
  <div class="container position-relative" style="z-index: 2;">
    <div class="row align-items-center g-5">

      <div class="col-lg-6 text-light text-center text-lg-start">
        <div class="text-uppercase fw-bold mb-3" style="letter-spacing:3px; color: var(--accent); font-size:12px;">
            Global Mobility & Investment
        </div>

        <h2 class="display-5 fw-bold mb-0" style="color: #fff;">Strategic Workforce</h2>
        <h2 class="display-5 fw-bold mb-4" style="background: linear-gradient(90deg, var(--accent), #3a7bfd); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Smart Capital</h2>

        <p class="mb-5" style="font-size: 1.1rem; color: rgba(227,233,255,0.75); line-height: 1.8;">
          FameOceans structures <strong>compliant workforce mobility</strong> and strategic investment corridors between Africa, the Gulf, and Europe.
        </p>

        <a href="#" class="btn btn-lg rounded-pill px-5 py-3 shadow-lg hover-glow" 
           style="background: #fff; color: var(--deep); font-weight: 700; border: none; font-size: 1rem; letter-spacing: 1px; transition: all 0.3s ease;">
            Connect Now <i class="fas fa-arrow-right ms-2"></i>
        </a>
      </div>

      <div class="col-lg-6">
        <div class="position-relative px-2">
          <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1); border-radius: 30px; padding: 12px; backdrop-filter: blur(5px);">
            <img src="{{ asset('images/Consultancy.jpeg') }}" 
                 alt="Global Advisory" 
                 class="img-fluid rounded-4 shadow-lg w-100"
                 style="display: block; height: auto; border-radius: 20px; object-fit: cover;">
          </div>
          
          <div class="position-absolute d-none d-md-block" style="bottom: 5px; right: 5px; width: 80px; height: 80px; background: linear-gradient(135deg, var(--accent), #3a7bfd); border-radius: 15px; z-index: -1; opacity: 0.2;"></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TREASURE CHEST -->
<section id="our-services" style="position: relative; overflow: hidden; background: linear-gradient(135deg, rgba(8, 27, 52, 0.95), rgba(4, 13, 28, 0.9)); padding: 100px 0;">
  
  <div class="container text-center position-relative" style="z-index: 2;">
    
    <div class="mb-5">
      <h2 class="section-title mb-2" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-weight: 700;">Our Strategic Pillars</h2>
      <p class="section-subtitle mx-auto" style="color: var(--muted); max-width: 600px;">Expert-led solutions designed to navigate and unlock global market potential.</p>
    </div>

    <div class="row g-5 mt-2">

      <div class="col-md-3">
        <div class="pillar-item p-3">
          <i class="fas fa-lightbulb fa-3x mb-4" style="color: var(--accent); opacity: 0.9;"></i>
          <h4 class="text-white fw-bold mb-3">Consult</h4>
          <p style="color: rgba(227,233,255,0.7); font-size: 0.95rem; line-height: 1.6;">Expert analysis and bespoke roadmaps to solve complex market entry and operational challenges.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="pillar-item p-3">
          <i class="fas fa-globe-africa fa-3x mb-4" style="color: var(--accent); opacity: 0.9;"></i>
          <h4 class="text-white fw-bold mb-3">Culture</h4>
          <p style="color: rgba(227,233,255,0.7); font-size: 0.95rem; line-height: 1.6;">Facilitating cross-border connections and cultural intelligence to bridge Africa and the world.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="pillar-item p-3">
          <i class="fas fa-chart-line fa-3x mb-4" style="color: var(--accent); opacity: 0.9;"></i>
          <h4 class="text-white fw-bold mb-3">Invest</h4>
          <p style="color: rgba(227,233,255,0.7); font-size: 0.95rem; line-height: 1.6;">Identifying high-yield, compliant investment corridors for long-term capital appreciation.</p>
        </div>
      </div>

      <div class="col-md-3">
        <div class="pillar-item p-3">
          <i class="fas fa-users-cog fa-3x mb-4" style="color: var(--accent); opacity: 0.9;"></i>
          <h4 class="text-white fw-bold mb-3">Mobility</h4>
          <p style="color: rgba(227,233,255,0.7); font-size: 0.95rem; line-height: 1.6;">Strategic human capital advisory and legal compliance for international workforce mobility.</p>
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
                Strategic solutions designed to optimize operations and accelerate global business growth.
            </p>
        </div>

        <div class="row g-4 mt-2 flex-nowrap overflow-auto hide-scrollbar flex-md-wrap">
            
            <!-- Card 1: Calculated Growth -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Bold Moves.jpeg') }}" alt="Calculated Growth" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Calculated Growth</h4>
                        <p class="small text-muted mb-4">We deliver high-impact, strategic recommendations designed to challenge standard limits and drive market leadership.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Card 2: Global Network -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-100">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Global Network.jpeg') }}" alt="Global Network" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Global Network</h4>
                        <p class="small text-muted mb-4">Our international network connects your enterprise directly to high-value markets, partners, and institutional opportunities.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Card 3: Future Focus -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-200">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/focus.jpeg') }}" alt="Future Focus" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Forward-Thinking Strategy</h4>
                        <p class="small text-muted mb-4">We structure agile business models and digital capabilities that ensure long-term resilience and sustainable expansion.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Card 4: Executive Insights -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-300">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Business brain.jpeg') }}" alt="Executive Insights" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Executive Expertise</h4>
                        <p class="small text-muted mb-4">We analyze operational challenges through data-backed methodologies, engineering solutions that maximize enterprise value.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Card 5: Capital Optimization -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-400">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/money1.jpg') }}" alt="Capital Optimization" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Capital Optimization</h4>
                        <p class="small text-muted mb-4">We deploy strategic resource allocation methods designed to maximize overall return on investment and compound asset value.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
                    </div>
                </div>
            </div>

            <!-- Card 6: Market Expansion -->
            <div class="col-10 col-md-6 col-lg-4 flex-shrink-0 flex-md-shrink-1" x-show="shown" x-transition:enter="transition ease-out duration-500 delay-500">
                <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect">
                    <div class="position-relative overflow-hidden" style="height: 200px;">
                        <img src="{{ asset('images/Global reach.jpeg') }}" alt="Market Expansion" class="w-100 h-100 object-fit-cover zoom-img">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent, rgba(4, 13, 28, 0.9));"></div>
                    </div>
                    <div class="p-4 text-center">
                        <h4 class="text-white fw-bold mb-3">Market Expansion</h4>
                        <p class="small text-muted mb-4">Scale your enterprise across emerging markets with streamlined international strategies and strategic brand positioning.</p>
                        <button class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">Learn More</button>
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
@foreach ($posts as $post)
<div class="col-10 col-md-4 flex-shrink-0 flex-md-shrink-1">
    <div class="glass-card h-100 p-0 overflow-hidden border-0 group-hover-effect" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.08)!important;">
        
        {{-- Featured Image --}}
        <div class="position-relative overflow-hidden" style="height: 220px;">
            <img src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/Bold Moves.jpeg') }}" 
                 alt="{{ $post->title }}" 
                 class="w-100 h-100 object-fit-cover zoom-img">
        </div>
        
        {{-- Card Content --}}
        <div class="p-4 text-start">
            <h4 class="text-white fw-bold mb-2">{{ $post->title }}</h4>
            
            <small class="d-block mb-3" style="color: var(--accent); font-size: 0.75rem; letter-spacing: 0.5px;">
                <i class="fas fa-user me-1"></i>By {{ $post->author->name ?? 'Unknown' }} &nbsp;|&nbsp; 
                <i class="fas fa-calendar-alt me-1"></i>{{ $post->published_at?->format('M d, Y') ?? '—' }}
            </small>
            
            <p class="text-white-50 small mb-4">{{ Str::limit($post->excerpt, 150) }}</p>
            
            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-sm btn-outline-light rounded-pill px-4 hover-accent-btn">
                Read More <i class="fas fa-arrow-right ms-2" style="font-size: 0.7rem;"></i>
            </a>
        </div>
    </div>
</div>
@endforeach

    </div>
  </div>
</section>

<!-- PARTNERS CAROUSEL SECTION -->
<section class="py-5 position-relative overflow-hidden border-top border-bottom border-white border-opacity-10" style="background: rgba(10, 20, 35, 0.6);">
  <div class="container text-center py-4">
    <!-- Section Title -->
    <div class="mb-5">
      <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-2 rounded-pill small text-uppercase mb-2" style="letter-spacing: 2px;">
        <i class="fas fa-handshake me-2"></i> Strategic Alliances
      </span>
      <h2 class="display-6 fw-bold mb-2" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
        Trusted Partners & Regional Network
      </h2>
      <p class="text-light-50 mx-auto" style="max-width: 650px; color: rgba(227,233,255,0.75);">
        Collaborating with industry-leading organizations, universities, and regional institutions across East Africa, Europe, and the Gulf Region.
      </p>
    </div>

    <!-- INFINITE CONTINUOUS LOGO / PARTNER TICKER -->
    <div class="partner-ticker-wrapper position-relative py-3">
      <!-- Gradient Fade Overlay Edge Effects -->
      <div class="ticker-overlay-left"></div>
      <div class="ticker-overlay-right"></div>

      <div class="partner-ticker-track d-flex align-items-center gap-4">
        
        <!-- Track Set 1 -->
        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-university text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Academic Alliances</h6>
            <small class="text-info opacity-75">EU & East Africa</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
          <div class="partner-icon-wrapper rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-briefcase text-primary fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Global Workforce</h6>
            <small class="text-info opacity-75">Romania & UAE</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-landmark text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Trade Registries</h6>
            <small class="text-info opacity-75">Rwanda & CEE Hubs</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
          <div class="partner-icon-wrapper rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-laptop-code text-primary fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Mobility Systems</h6>
            <small class="text-info opacity-75">International Tech</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-globe-africa text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">East Africa Trade Hub</h6>
            <small class="text-info opacity-75">Kigali, Rwanda</small>
          </div>
        </div>

        <!-- Track Set 2 (Duplicate for Infinite Seamless Loop) -->
        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-university text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Academic Alliances</h6>
            <small class="text-info opacity-75">EU & East Africa</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
          <div class="partner-icon-wrapper rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-briefcase text-primary fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Global Workforce</h6>
            <small class="text-info opacity-75">Romania & UAE</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-landmark text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Trade Registries</h6>
            <small class="text-info opacity-75">Rwanda & CEE Hubs</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
          <div class="partner-icon-wrapper rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-laptop-code text-primary fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">Mobility Systems</h6>
            <small class="text-info opacity-75">International Tech</small>
          </div>
        </div>

        <div class="partner-card glass-card px-4 py-3 d-flex align-items-center gap-3 border border-white border-opacity-10 rounded-4" aria-hidden="true">
          <div class="partner-icon-wrapper rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
            <i class="fas fa-globe-africa text-info fa-lg"></i>
          </div>
          <div class="text-start">
            <h6 class="fw-bold text-white mb-0 fs-6">East Africa Trade Hub</h6>
            <small class="text-info opacity-75">Kigali, Rwanda</small>
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
    overflow: hidden;">
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(4, 13, 28, 0.4); pointer-events: none;"></div>

  <div class="container text-center text-light position-relative" style="z-index: 2;">

    <div class="text-uppercase fw-bold mb-3" style="letter-spacing:4px; color: var(--accent); font-size:13px; opacity: 0.9;">
        Ready to Scale Your Brand?
    </div>

    <h2 class="display-4 fw-bold mb-3" style="background: linear-gradient(90deg, #fff, var(--accent)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Let's Drive Measurable Impact
    </h2>

    <p class="mx-auto mb-5" style="color: rgba(227,233,255,0.8); max-width: 550px; font-size: 1.1rem; line-height: 1.8;">
      Transform your market presence. FameOceans delivers tailored digital strategies to establish industry leadership and drive global expansion.
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