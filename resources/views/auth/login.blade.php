@extends('layouts.app')
<body class="bg-primary">

@section('content')
<div class="d-flex align-items-center justify-content-center" style="height: 100vh">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3">
            <div class="mb-3 text-center">
                <div class="mb-3 text-center">
                    <i class="bi bi-hexagon-fill text-primary fs-1"></i>
                    <h4>Employee Data Master</h4>
                </div>
                <hr>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <div class="col-12">
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Enter Your Email" name="email" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">

                        <div class="col-12">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Password" name="password"
                                required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row mb-0 align-items-center justify-content-center">
                        <div class="col">
                            <button type="submit" class="btn btn-primary col-12" style="font-size: 18px"><i class="bi bi-box-arrow-in-right"></i>
                                {{ __('Login') }}
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/app.js')
        </body>

@endsection
