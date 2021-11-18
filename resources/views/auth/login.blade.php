@extends('layouts.app')

@section('content')

<div class="container  mt--8 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
            <div class="card border-0 mb-0">
                <div class="card-header text-muted text-center mt-2 mb-3">{{ __('Login') }}</div>
                    <div class="btn-wrapper text-center">
                        {{-- <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="{{ asset('assets-admin/img/icons/common/github.svg') }}"></span>
                            <span class="btn-inner--text">Github</span>
                        </a>
                        <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon"><img src="{{ asset('assets-admin/img/icons/common/google.svg') }}"></span>
                            <span class="btn-inner--text">Google</span>
                        </a> --}}
                    </div>
            {{-- Card Body --}}
                <div class="card-body px-lg-5 py-lg-5 ">
                    {{-- <div class="text-center text-muted mb-4">
                        <small>Or sign in with credentials</small>
                    </div> --}}
                    <form method="POST" role="form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                </div>
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror   
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group input-group-merge input-group-alternative">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                </div>                            
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember"> 
                                <span class="text-muted">{{ __('Remember Me') }}</span>
                            </label>
                        </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">
                                    {{ __('Login') }}
                                </button>
                            </div>
                    </form> 
                </div>
                
            </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-light" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </div>
    </div>
</div>
@endsection
