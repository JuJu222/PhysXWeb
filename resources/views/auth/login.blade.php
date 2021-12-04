@extends('layouts.apps')

@section('content')
    {{-- <div class="row justify-content-center d-flex align-items-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center text"><h3><b>{{ __('Login Page') }}</b><h3></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <main class="py-5 mt-5">
    <div class = "container-sm">
        <div class="rowForm mt-5 d-flex justify-content-center align-items-center">
            <div class = "col-lg-12">
               <h2 class="text-center mt-5"><b>Halaman Login</b></h2>
               <h5 class="text-center me-4 text-secondary mt-3 mb-4"> Belum menjadi member?<a href="{{ route('register')}}" class="text-opaque-links text-decoration-none"> Sign Up</a></h5> 

               <form method="POST" action="{{ route('login') }}">
                @csrf
               <div class="form-group">
                <div class="col-md-4 mx-auto">
                    <div class="fontuser">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email Anda">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <i class="bi bi-envelope-fill"></i>
                </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-4 mx-auto">
                    <div class="fontuser">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus placeholder="Masukkan Password Anda">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                </div>
              </div>
            </div>
              <div class="form-group">
                <div class="col-md-4 mx-auto">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="d-flex col-md-12 justify-content-center align-items-center mt-3">
                    <button type="submit" class="btn btn-opaque rounded-circleX px-5"><b>
                        {{ __('Login') }}</b>
                    </button>
                </div>
                <div class="d-flex col-md-12 justify-content-center align-items-center mt-2 mb-5">
                    @if (Route::has('password.request'))
                     <a class="btn btn-opaque-links text-decoration-none" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
            </form>
            </div>
              
            </div>
        </div>
    </main>


<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('bi bi-eye-fill');
});
    </script>
@endsection

