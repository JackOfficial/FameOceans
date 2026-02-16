@extends('layouts.app')

@section('content')

<section class="hero py-5 mt-5">
    <div class="container text-center py-5">
        <div class="animate__animated animate__fadeIn">
            <i class="fas fa-envelope-open-text fa-3x mb-4" style="color: var(--accent); filter: drop-shadow(0 0 10px var(--accent));"></i>

            <h1 class="display-3 fw-bold mb-3" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Let’s Talk <br> We’re Listening
            </h1>

            <p class="lead mx-auto" style="max-width: 750px; color: rgba(227,233,255,0.7); font-size: 1.25rem;">
                Whether you’re a creator, a business, or an investor, we’d love to hear from you. 
                Drop us a message and let’s start navigating new opportunities together.
            </p>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title h1 fw-bold mb-3">Reach Out</h2>
        <p class="section-subtitle mb-5 text-info text-uppercase fw-bold small" style="letter-spacing: 2px;">
            Multiple channels. One global conversation.
        </p>

        <div class="row g-4 mt-2">
            <div class="col-md-4">
                <div class="glass-card p-5 text-center h-100 border border-white border-opacity-10 shadow-lg" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
                        <i class="fas fa-envelope fa-2x" style="color: var(--accent);"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Email Us</h4>
                    <p class="small mb-4" style="color: rgba(227,233,255,0.6);">Questions or partnerships — we reply fast.</p>
                    <a href="mailto:info@fameoceans.com" class="btn btn-outline-info rounded-pill px-4 btn-sm">
                        info@fameoceans.com
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card p-5 text-center h-100 border border-white border-opacity-10 shadow-lg" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
                        <i class="fas fa-phone-alt fa-2x" style="color: var(--accent);"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Call Us</h4>
                    <p class="small mb-4" style="color: rgba(227,233,255,0.6);">Let’s have a real conversation.</p>
                    <a href="tel:+250788789989" class="btn btn-outline-info rounded-pill px-4 btn-sm">
                        (+250) 788 789 989
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="glass-card p-5 text-center h-100 border border-white border-opacity-10 shadow-lg" style="background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); border-radius: 20px;">
                    <div class="icon-box mb-4 mx-auto d-flex align-items-center justify-content-center shadow-sm" style="width: 70px; height: 70px; background: rgba(58,123,253,0.1); border-radius: 50%;">
                        <i class="fas fa-map-marker-alt fa-2x" style="color: var(--accent);"></i>
                    </div>
                    <h4 class="fw-bold text-white mb-3">Our Base</h4>
                    <p class="small mb-4" style="color: rgba(227,233,255,0.6);">Operating globally, rooted in Africa.</p>
                    <span class="badge bg-info bg-opacity-10 text-info px-4 py-2 rounded-pill border border-info border-opacity-25">
                        Kigali, Rwanda
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 position-relative" style="background: linear-gradient(to bottom, transparent, rgba(10, 20, 40, 0.5));">
    <div class="container">
        <div class="glass-card p-4 p-lg-5 border border-white border-opacity-10 shadow-2xl" style="background: rgba(255,255,255,0.02); border-radius: 30px; backdrop-filter: blur(20px);">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-light animate__animated animate__fadeInLeft">
                    <div class="text-uppercase fw-bold mb-3" style="letter-spacing:2px; color: var(--accent); font-size:14px;">
                        <span class="me-2">—</span> Send a Message
                    </div>

                    <h2 class="display-5 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                        Start the <br>Conversation
                    </h2>

                    <p class="mb-4" style="font-size:1.1rem; color: rgba(227,233,255,0.8); line-height: 1.7;">
                        Have an idea, a proposal, or a question? Tell us about it. 
                        Every great collaboration starts with a simple message.
                    </p>

                    <div class="d-flex align-items-center mt-5 text-info">
                        <div class="spinner-grow spinner-grow-sm me-3" role="status"></div>
                        <span class="small fw-bold text-uppercase tracking-wider">Our agents are online</span>
                    </div>
                </div>

                <div class="col-lg-7 animate__animated animate__fadeInRight">
                    <div class="p-4 rounded-4 bg-white bg-opacity-5 border border-white border-opacity-10">
                        <livewire:contact-component />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden mt-5" style="padding: 140px 0;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(135deg, rgba(10, 20, 40, 0.9), rgba(58, 123, 253, 0.4)),
        url('{{ asset('images/ocean-cta.jpg') }}') no-repeat center center/cover;
        z-index: -1;
    "></div>

    <div class="container text-center text-light">
        <div class="animate__animated animate__zoomIn">
            <i class="fas fa-ship fa-3x mb-4" style="color: var(--accent);"></i>
            <h2 class="display-4 fw-bold mb-4" style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Ready to Make Waves?
            </h2>
            <p class="lead mx-auto mb-5" style="max-width:700px; color: rgba(227,233,255,0.85);">
                Let FameOceans help you turn ambition into action. 
                The next big opportunity is just one message away.
            </p>
            <a href="#" class="btn btn-primary btn-lg rounded-pill px-5 py-3 shadow-lg transform-scale transition-all">
                Get Started <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<style>
    .glass-card { transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1); }
    .glass-card:hover { 
        transform: translateY(-8px); 
        background: rgba(255,255,255,0.06) !important;
        border-color: rgba(154, 223, 255, 0.3) !important;
    }
    .icon-box { transition: 0.3s ease; }
    .glass-card:hover .icon-box { transform: scale(1.1) rotate(5deg); }
    .transform-scale:hover { transform: scale(1.05); box-shadow: 0 15px 30px rgba(58, 123, 253, 0.3); }
    .tracking-wider { letter-spacing: 1.5px; }
</style>

@endsection