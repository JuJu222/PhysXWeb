@extends('layouts.apps')
@section('title', 'Login - PhysXWeb')
@section('content')
    <main class="py-5 mt-5">
    <div class = "container-sm">
        @if(Session::has('loggedOut'))
        <h4 class = "alert alert-info text-center">{{ Session::get('loggedOut') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif
        <div class="form-content rowForm mt-auto d-flex justify-content-center align-items-center">
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

