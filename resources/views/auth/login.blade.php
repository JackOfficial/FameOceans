@extends('layouts.auth')

@section('content')
<div class="auth-page container-fluid px-3">
    <div class="row w-100 justify-content-center m-0">
        <div class="col-md-6 col-lg-4 col-xl-3">

            <div class="text-center mb-4">
                <a href="/">
                    <img style="width: 190px" 
                         src="{{ asset('images/FameOceans.png') }}" 
                         alt="FameOceans Logo" 
                         class="img-fluid">
                </a>
            </div>

            <div class="card glass-card border-0">
                <div class="card-body p-4 p-lg-5">
                    <div class="mb-4">
                        <h3 class="fw-bold text-white mb-1">Welcome Back</h3>
                        <p class="small text-muted">Please enter your details to sign in.</p>
                    </div>

                    @error('socialLoginInError')
                        <div class="alert alert-danger bg-danger bg-opacity-10 border-0 text-danger small py-2">{{ $message }}</div>
                    @enderror

                    @if (session('status'))
                        <div class="alert alert-success bg-success bg-opacity-10 border-0 text-success small py-2">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/auth/google" class="btn btn-google w-100 d-flex align-items-center justify-content-center gap-2 mb-4 py-2">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/action/google.svg" width="18">
                        <span>Continue with Google</span>
                    </a>

                    <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1 border-white border-opacity-10">
                        <span class="mx-3 text-muted small text-uppercase" style="letter-spacing: 1px;">or</span>
                        <hr class="flex-grow-1 border-white border-opacity-10">
                    </div>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label small text-muted">Email Address</label>
                            <div class="input-group">
                                <input type="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       placeholder="e.g. name@company.com" 
                                       required autofocus>
                                <span class="input-group-text border-start-0">
                                    <i class="fas fa-envelope fs-small"></i>
                                </span>
                            </div>
                            @error('email')
                                <div class="text-danger extra-small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3" x-data="{ show: false }">
                            <div class="d-flex justify-content-between">
                                <label class="form-label small text-muted">Password</label>
                                <a href="/forgot-password" class="extra-small text-accent text-decoration-none">Forgot password?</a>
                            </div>
                            <div class="input-group">
                                <input :type="show ? 'text' : 'password'" 
                                       name="password" 
                                       class="form-control @error('password') is-invalid @enderror" 
                                       placeholder="••••••••"
                                       required>
                                <span class="input-group-text border-start-0" 
                                      style="cursor:pointer" 
                                      @click="show = !show">
                                    <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                </span>
                            </div>
                            @error('password')
                                <div class="text-danger extra-small mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input bg-transparent border-white border-opacity-25" 
                                   type="checkbox" 
                                   name="remember" 
                                   id="remember" 
                                   {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label small text-muted" for="remember">
                                Remember this device
                            </label>
                        </div>

                        <button type="submit" class="btn btn-ocean w-100 py-3 fw-bold text-uppercase" style="letter-spacing: 1px;">
                            Sign In
                        </button>
                    </form>

                    <div class="text-center mt-4">
                        <p class="small text-muted mb-0">
                            Don’t have an account? 
                            <a href="/register" class="text-accent fw-bold text-decoration-none">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="auth-footer text-muted">
                © {{ date('Y') }} FameOceans Fleet · 
                <a href="/privacy-policy" class="mx-1">Privacy</a> · 
                <a href="/terms" class="mx-1">Terms</a>
            </div>

        </div>
    </div>
</div>

<style>
    /* Specific helpers for this page */
    .extra-small { font-size: 0.75rem; }
    .fs-small { font-size: 0.85rem; }
    .text-accent { color: var(--accent) !important; }
</style>
@endsection