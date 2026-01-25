@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero">
  <div class="container text-center">
    <i class="fas fa-envelope-open-text fa-3x mb-3" style="color: var(--accent);"></i>

    <h1>Let’s Talk</h1>
    <h1>We’re Listening</h1>

    <p>
      Whether you’re a creator, a business, or an investor,
      we’d love to hear from you. Drop us a message and
      let’s start navigating new opportunities together.
    </p>
  </div>
</section>

<!-- CONTACT OPTIONS -->
<section>
  <div class="container text-center">

    <h2 class="section-title">Reach Out</h2>
    <p class="section-subtitle">
      Multiple channels. One global conversation.
    </p>

    <div class="row g-4 mt-5">

      <!-- EMAIL -->
      <div class="col-md-4">
        <div class="glass-card text-center h-100">
          <i class="fas fa-envelope fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Email Us</h4>
          <p>Questions, partnerships, or support — we reply fast.</p>
          <a href="mailto:info@fameoceans.com" class="btn btn-sm btn-outline-light mt-2">
            info@fameoceans.com
          </a>
        </div>
      </div>

      <!-- PHONE -->
      <div class="col-md-4">
        <div class="glass-card text-center h-100">
          <i class="fas fa-phone-alt fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Call Us</h4>
          <p>Let’s have a real conversation.</p>
          <a href="tel:+250700000000" class="btn btn-sm btn-outline-light mt-2">
            (+250) 788789989
          </a>
        </div>
      </div>

      <!-- LOCATION -->
      <div class="col-md-4">
        <div class="glass-card text-center h-100">
          <i class="fas fa-map-marker-alt fa-3x mb-3" style="color: var(--accent);"></i>
          <h4>Our Base</h4>
          <p>Operating globally, rooted in Africa.</p>
          <a class="btn btn-sm btn-outline-light mt-2 disabled">
            Kigali, Rwanda
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT FORM -->
<section style="background: linear-gradient(to bottom, var(--mid), var(--deep));">
  <div class="container">
    <div class="row g-5 align-items-center">

      <!-- LEFT TEXT -->
      <div class="col-md-5 text-light">
        <div class="text-uppercase fw-bold mb-2" style="letter-spacing:2px; color: var(--accent); font-size:14px;">
          Send a Message
        </div>

        <h2 class="fw-bold mb-3"
            style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          Start the Conversation
        </h2>

        <p style="font-size:18px; color: rgba(227,233,255,0.85);">
          Have an idea, a proposal, or a question?
          Tell us about it. Every great collaboration
          starts with a simple message.
        </p>
      </div>

      <!-- FORM -->
      <div class="col-md-7">
        <livewire:contact-component />
      </div>

    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section style="
  background: linear-gradient(135deg, rgba(58,123,253,0.7), rgba(0,224,255,0.5)),
  url('{{ asset('images/ocean-cta.jpg') }}') no-repeat center center/cover;
  padding: 120px 0;
">
  <div class="container text-center text-light">

    <i class="fas fa-ship fa-3x mb-3" style="color: var(--accent);"></i>

    <h2 class="display-5 fw-bold mb-3"
        style="background: linear-gradient(90deg,#fff,#9adfff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
      Ready to Make Waves?
    </h2>

    <p class="lead mx-auto mb-4" style="max-width:700px; color: rgba(227,233,255,0.85);">
      Let FameOceans help you turn ambition into action.
      The next big opportunity is just one message away.
    </p>

    <a href="#" class="btn btn-primary btn-lg shadow-lg px-5 py-3">
      Get Started <i class="fas fa-arrow-right ms-2"></i>
    </a>

  </div>
</section>

@endsection
