@extends('layouts.app')

@section('content')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         body {
           margin:0;
           padding:0;
           /*font-family: sans-serif;*/
           /*background: linear-gradient(#141e30, #243b55);*/
           background-color:#dac292;
         }
             .login-form {
              position: relative;
              top: 310px;
              left: 50%;
              width: 400px;
              padding: 40px;
              transform: translate(-50%, -50%);
              background:#c1946a;
              box-sizing: border-box;
              box-shadow:  5px 10px 18px #4f3222;
              border-radius: 10px;
              margin-bottom: 150px;
              }
          .login-form h2{
                  margin: 0 0 30px;
                  padding: 0;
                  color: #fff;
                  text-align: center;
                  font-weight: bold;
                  font-size: xx-large;
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
              font-family: 'Athiti', sans-serif;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
          }
          .login-form .form-group ::placeholder {
            position: absolute;
            top:0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
              font-family: 'Athiti', sans-serif;
            color: #fff;
            pointer-events: none;
            transition: .5s;
          }
          .login-form.form-group input:focus ~ ::placeholder,
          .login-form.form-group input:valid ~ ::placeholder {
            top: -20px;
            left: 0;
            color: #bc5a45;
            font-size: 12px;
              font-family: 'Athiti', sans-serif;
          }
          .login-form a {
            position: relative;
            display: inline-block;
            padding: 10px 20px;
            color: #bc5a45;
            font-size: 16px;
              font-family: 'Athiti', sans-serif;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px
          }
         .login-form a:hover {
             background: #bc5a45;
             color: #fff;
             border-radius: 5px;
             box-shadow: 0 0 5px #bc5a45,
             0 0 25px #bc5a45,
             0 0 50px #bc5a45,
             0 0 100px #bc5a45;
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
             background: linear-gradient(90deg, transparent, #bc5a45);
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
             background: linear-gradient(180deg, transparent, #bc5a45);
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
             background: linear-gradient(270deg, transparent, #bc5a45);
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
             background: linear-gradient(360deg, transparent, #bc5a45);
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
         @media only screen and (max-width:481px) {
             /* For mobile phones: */
             .login-form {
                 width:90%;
             }
         }

         .btn{
             display: inline-block;
             font-weight: 600;
             text-align: center;
             white-space: nowrap;
             vertical-align: middle;
             -webkit-user-select: none;
             -moz-user-select: none;
             -ms-user-select: none;
             user-select: none;
             border: 2px solid transparent;
             padding: 12px 30px;

             font-size: 16px;
             line-height: 1.5;
             border-radius: .1875rem;
             transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
         }
         .btn-outline-new-white {
             color: #fff;
             background-color: transparent;
             background-image: none;
             border-color: #fff;
         }
         .btn-outline-new-white:hover {
             color: #cfa671;
             background-color: #fff;
             border-color: #fff;
         }

          </style>

    <form method="POST" action="{{ route('login') }}">
                                @csrf
                  <div class="login-form">
                      <h2>LOGIN</h2>
                      <div>
                          <div class="form-group">
                              <div class="form-group">

                                  <input id="email" type="email" placeholder="Email ID" class="form-group @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">


                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="form-group">
                                  <input id="password" type="password" placeholder="Password" class="form-group @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                  @enderror
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col text-center">
                                  <button type="submit" class="btn btn-lg btn-circle btn-outline-new-white">
                                      {{ __('Login') }}
                                  </button>
                              </div>
                          </div>
                      </div>
                  </div>
        </div>
    </form>



@endsection

