@extends('layouts.app')

@section('content')
        <div class="login-dark">
                <div style="color: #fff;">{{ __('Confirm Password') }}</div>

                
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                        <h2 class="sr-only">Confirm Password</h2>
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>

                        <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Confrim Your Password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-primary btn-block" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                    
        </div>
@endsection
