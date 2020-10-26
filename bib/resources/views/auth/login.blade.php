@extends('layouts.app')

@section('content')
    <style>
         body {
           margin:0;
           padding:0;
           /*font-family: sans-serif;*/
           /*background: linear-gradient(#141e30, #243b55);*/
           background-color:#1a202c;
         }
             .login-form {
              position: absolute;
              top: 50%;
              left: 50%;
              width: 400px;
              padding: 40px;
              transform: translate(-50%, -50%);
              background:#385d7a;
              box-sizing: border-box;
              box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
              border-radius: 10px;
              }
          .login-form h2{
                  margin: 0 0 30px;
                  padding: 0;
                  color: #fff;
                  text-align: center;
           }
          .login-form .form-group
          {
              position: relative;
          }
          .login-form .form-group input
          {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
          }
          .login-form .form-group label {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
          }
          .login-form.form-group input:focus ~ label,
          .login-form.form-group input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
          }
          .login-form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #03e9f4;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
          }
         .login-form a:hover {
             background: #03e9f4;
             color: #fff;
             border-radius: 5px;
             box-shadow: 0 0 5px #03e9f4,
             0 0 25px #03e9f4,
             0 0 50px #03e9f4,
             0 0 100px #03e9f4;
         }

         .login-form a span {
             position: absolute;
             display: block;
         }

         .login-form a span:nth-child(1) {
             top: 0;
             left: -100%;
             width: 100%;
             height: 2px;
             background: linear-gradient(90deg, transparent, #03e9f4);
             animation: btn-anim1 1s linear infinite;
         }
         @keyframes btn-anim1 {
             0% {
                 left: -100%;
             }
             50%,100% {
                 left: 100%;
             }
         }

         .login-form a span:nth-child(2) {
             top: -100%;
             right: 0;
             width: 2px;
             height: 100%;
             background: linear-gradient(180deg, transparent, #03e9f4);
             animation: btn-anim2 1s linear infinite;
             animation-delay: .25s
         }

         @keyframes btn-anim2 {
             0% {
                 top: -100%;
             }
             50%,100% {
                 top: 100%;
             }
         }

         .login-form a span:nth-child(3) {
             bottom: 0;
             right: -100%;
             width: 100%;
             height: 2px;
             background: linear-gradient(270deg, transparent, #03e9f4);
             animation: btn-anim3 1s linear infinite;
             animation-delay: .5s
         }

         @keyframes btn-anim3 {
             0% {
                 right: -100%;
             }
             50%,100% {
                 right: 100%;
             }
         }

         .login-form a span:nth-child(4) {
             bottom: -100%;
             left: 0;
             width: 2px;
             height: 100%;
             background: linear-gradient(360deg, transparent, #03e9f4);
             animation: btn-anim4 1s linear infinite;
             animation-delay: .75s
         }

         @keyframes btn-anim4 {
             0% {
                 bottom: -100%;
             }
             50%,100% {
                 bottom: 100%;
             }
         }

          </style>
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}
                        <div class="login-form">
                            <h2>LOGIN</h2>
                            <form>
                        <div class="form-group">
{{--                            <label for="email" >{{ __('E-Mail Address') }}</label>--}}

                            <div class="form-group">
                                <label for="email" >{{ __('E-Mail ID ') }}</label>
                                <input id="email" type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required="">


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="form-group">
                                <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <a href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            {{ __('Login') }}
                        </a>
{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
