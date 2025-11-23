@extends('layouts.app')

@section('title', __('messages.login_title'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-5">
        
        <div class="card shadow-sm mt-5">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">{{ __('messages.login_title') }}</h4>
            </div>

            <div class="card-body p-4">
                <p class="text-muted mb-4">{{ __('messages.login_to_account') }}</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">
                            {{ __('messages.email') }}
                        </label>
                        <input
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            placeholder="{{ __('messages.email') }}"
                        >

                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            {{ __('messages.password') }}
                        </label>
                        <input
                            type="password"
                            class="form-control @error('password') is-invalid @enderror"
                            id="password"
                            name="password"
                            required
                            placeholder="{{ __('messages.password') }}"
                        >

                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input
                            type="checkbox"
                            class="form-check-input"
                            id="remember"
                            name="remember"
                        >
                        <label class="form-check-label" for="remember">
                            {{ __('messages.remember_me') }}
                        </label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg">
                            {{ __('messages.login') }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="card-footer text-muted text-center">
                <small>

                    <strong>Demo:</strong> admin@conferences.lt / root
                </small>
            </div>
        </div>
    </div>
</div>
@endsection
