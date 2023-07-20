@extends('layouts.app')

@section('content')

<div class="container-sm my-5 col-6">
        <div class="row justify-content-center">
            <div class="container-sm mt-5">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="p-5 bg-light rounded-3 border col-xl-6">
                            <div class="mb-3 text-center">
                                <i class="bi-hexagon-fill fs-1 text-primary"></i>
                                <h4>Employee Data Master</h4>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            <hr>
                            <div class="col-md-12 d-grid">
                                <button type="submit" class="btn btn-primary btn-lg mt-3"><i class="bi bi-box-arrow-in-right me-2"></i> {{ __('Login') }}</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </form>
</div>

@endsection
