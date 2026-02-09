@extends('layouts.auth')

@section('content')

<div class="container-fluid d-flex align-items-center justify-content-center py-5">
    <div class="row w-100 justify-content-center">
        <div class="col-md-5 col-lg-4">

            <img class="mb-4 d-block mx-auto"
                 style="width: 180px;"
                 src="{{ asset('frontend/img/logo.png') }}"
                 alt="FameOceans Logo">

            <div class="card glass-card">
                <div class="card-header">
                    Login to FameOceans
                </div>

                <div class="card-body">

                    @error('socialLoginInError')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-light w-100 mb-3 fw-semibold"
                       href="{{ url('auth/redirect/google') }}">
                        <i class="fab fa-google me-2"></i> Continue with Google
                    </a>

                    <div class="text-center my-2 text-light">or</div>

                    <form method="POST" action="/login">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Email address"
                                   required>
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </div>

                        @error('email')
                            <div class="text-warning small mb-2">{{ $message }}</div>
                        @enderror

                        <div class="input-group mb-3" x-data="{ show: false }">
                            <input :type="show ? 'text' : 'password'"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   placeholder="Password">
                            <span class="input-group-text" @click="show = !show" style="cursor:pointer">
                                <i :class="show ? 'fas fa-eye-slash' : 'fas fa-eye'"></i>
                            </span>
                        </div>

                        @error('password')
                            <div class="text-warning small mb-2">{{ $message }}</div>
                        @enderror

                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <a href="/forgot-password">Forgot password?</a>

                            <div class="form-check text-light">
                                <input class="form-check-input"
                                       type="checkbox"
                                       name="remember"
                                       id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    Remember me
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-ocean w-100 py-2">
                            Login
                        </button>
                    </form>

                    <div class="text-center mt-3 text-light">
                        Don’t have an account?
                        <a href="/register" class="fw-semibold">Register</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection