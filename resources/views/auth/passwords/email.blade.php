@extends('layouts.app')

@section('content')
<div class="login-dark">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert" style="color: #fff;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h2 class="sr-only">Login to your Account</h2>
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your E-Mail" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                        </div>
                    </form>
                </div>
          
@endsection
