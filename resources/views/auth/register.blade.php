@extends('layouts.auth')

@section('content')
<div class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-lg-5 col-md-7">

            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/FameOceans Logo.png') }}"
                     alt="FameOceans"
                     style="width: 180px;">
            </div>

            <!-- Card -->
            <div class="card border-0 shadow-lg rounded-4">
                <div class="card-header bg-white border-0 text-center pt-4">
                    <h4 class="fw-bold mb-1">Create your account</h4>
                    <p class="text-muted small mb-0">
                        Join FameOceans and start your journey
                    </p>
                </div>

                <div class="card-body px-4 py-4">

                    {{-- Social login error --}}
                    @error('socialLoginInError')
                        <div class="alert alert-danger small">
                            {{ $message }}
                        </div>
                    @enderror

                    {{-- Status message --}}
                    @if (session('status'))
                        <div class="alert alert-success small">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Google signup -->
                    <a href="{{ url('auth/redirect/google') }}"
                       class="btn btn-outline-dark w-100 mb-3 d-flex align-items-center justify-content-center gap-2">
                        <i class="fab fa-google"></i>
                        Sign up with Google
                    </a>

                    <div class="text-center text-muted small mb-3">
                        — or sign up with email —
                    </div>

                    <!-- Form -->
                    <form method="POST" action="/register">
                        @csrf

                        <!-- Full name -->
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Full name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input type="text"
                                       name="name"
                                       value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror"
                                       placeholder="John Doe"
                                       required>
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label small fw-semibold">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email"
                                       name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="you@example.com"
                                       required>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-3" x-data="{ show: false }">
                            <label class="form-label small fw-semibold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input :type="show ? 'text' : 'password'"
                                       name="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="••••••••">
                                <span class="input-group-text bg-light cursor-pointer"
                                      @click="show = !show">
                                    <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                </span>
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Confirm password -->
                        <div class="mb-4" x-data="{ show: false }">
                            <label class="form-label small fw-semibold">Confirm password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input :type="show ? 'text' : 'password'"
                                       name="password_confirmation"
                                       class="form-control @error('password_confirmation') is-invalid @enderror"
                                       placeholder="••••••••">
                                <span class="input-group-text bg-light cursor-pointer"
                                      @click="show = !show">
                                    <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                                </span>
                            </div>
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                            Create account
                        </button>

                        <!-- Login -->
                        <p class="text-center small mt-3 mb-0">
                            Already have an account?
                            <a href="/login" class="fw-semibold">Login</a>
                        </p>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection