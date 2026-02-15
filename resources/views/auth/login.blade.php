@extends('layouts.auth')

@section('content')
<div class="auth-page container-fluid py-4"> <div class="row w-100 justify-content-center m-0">
        <div class="col-md-6 col-lg-4 col-xl-3">

            <div class="text-center mb-3"> <a href="/">
                    <img style="width: 160px" 
                         src="{{ asset('images/FameOceans.png') }}" 
                         alt="FameOceans Logo" 
                         class="img-fluid">
                </a>
            </div>

            <div class="card glass-card border-0">
                <div class="card-body p-4 p-lg-4"> <div class="mb-3">
                        <h4 class="fw-bold text-white mb-1">Welcome Back</h4>
                        <p class="extra-small text-muted">Please sign in to your portal.</p>
                    </div>

                    @error('socialLoginInError')
                        <div class="alert alert-danger bg-danger bg-opacity-10 border-0 text-danger extra-small py-2">{{ $message }}</div>
                    @enderror

                    @if (session('status'))
                        <div class="alert alert-success bg-success bg-opacity-10 border-0 text-success extra-small py-2">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/auth/google" class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2 mb-3 py-2">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/action/google.svg" width="16">
                        <span class="small">Continue with Google</span>
                    </a>

                    <div class="d-flex align-items-center my-3">
                        <hr class="flex-grow-1 border-white border-opacity-10">
                        <span class="mx-2 text-muted extra-small text-uppercase">or</span>
                        <hr class="flex-grow-1 border-white border-opacity-10">
                    </div>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label extra-small text-muted">Email Address</label>
                            <div class="input-group">
                                <input type="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       class="form-control auth-input @error('email') is-invalid @enderror" 
                                       placeholder="name@company.com" 
                                       required autofocus>
                                <span class="input-group-text auth-addon border-start-0">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                            @error('email')
                                <div class="text-danger extra-small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2" x-data="{ show: false }">
                            <div class="d-flex justify-content-between">
                                <label class="form-label extra-small text-muted">Password</label>
                                <a href="/forgot-password" class="extra-small text-accent text-decoration-none">Forgot?</a>
                            </div>
                            <div class="input-group">
                                <input :type="show ? 'text' : 'password'" 
                                       name="password" 
                                       class="form-control auth-input @error('password') is-invalid @enderror" 
                                       placeholder="••••••••"
                                       required>
                                <span class="input-group-text auth-addon border-start-0" 
                                      style="cursor:pointer" 
                                      @click="show = !show">
                                    <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                </span>
                            </div>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input bg-transparent border-white border-opacity-25" 
                                   type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label extra-small text-muted" for="remember">
                                Remember this device
                            </label>
                        </div>

                        <button type="submit" class="btn btn-ocean w-100 py-2 fw-bold text-uppercase small">
                            Sign In
                        </button>
                    </form>

                    <div class="text-center mt-3">
                        <p class="extra-small text-muted mb-0">
                            Don’t have an account? 
                            <a href="/register" class="text-accent fw-bold text-decoration-none">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="auth-footer text-muted small mt-3">
                © {{ date('Y') }} FameOceans · 
                <a href="/privacy-policy" class="mx-1">Privacy</a> · 
                <a href="/terms" class="mx-1">Terms</a>
            </div>

        </div>
    </div>
</div>

<style>
    /* 1. Fix Visibility: Dark backgrounds for inputs */
    .auth-input {
        background: rgba(0, 0, 0, 0.2) !important; /* Forces dark bg */
        color: #ffffff !important; /* Forces white text */
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        font-size: 0.9rem !important;
    }

    .auth-input::placeholder {
        color: rgba(255, 255, 255, 0.4) !important;
    }

    .auth-addon {
        background: rgba(0, 0, 0, 0.2) !important;
        border: 1px solid rgba(255, 255, 255, 0.1) !important;
        color: rgba(255, 255, 255, 0.5) !important;
    }

    /* 2. Compact styling to prevent scrolling */
    .extra-small { font-size: 0.78rem; }
    .text-accent { color: var(--accent) !important; }
    
    /* Ensure the card doesn't get too tall on small screens */
    .glass-card {
        margin-bottom: 10px;
    }

    @media (max-height: 700px) {
        .auth-page { align-items: flex-start; padding-top: 20px !important; }
        .mb-4 { margin-bottom: 1rem !important; }
    }
</style>
@endsection