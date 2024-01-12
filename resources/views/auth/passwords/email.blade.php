@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #82c7ee;">
                <div class="card-header" style="background-color: #007bff; color: #fff; font-weight: bold;">{{ __('Reset Password') }}</div>

                <div class="card-body" style="color: #333;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #e6f7ff;">

                            @error('email')
                                <div class="invalid-feedback" role="alert" style="color: #dc3545;">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary" style="background-color: #007bff; border: none;">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Best Regards from EmaBabySpa -->
                <div class="card-footer" style="background-color: #007bff; color: #fff; text-align: center;">
                    Best Regards from EmaBabySpa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
