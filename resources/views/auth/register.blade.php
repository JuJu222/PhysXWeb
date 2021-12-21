@extends('layouts.apps')

@section('content')
<div class="container register-form">
    <div class="form px-2 py-5">
        <div class="rowForm">
            <form method="POST" action="{{ route('register') }}">
                @csrf
        <div class="form-content rounded">
            <div class="row d-flex justify-content-center align-items-center">                
                <div class="col-md-4 px-4 mt-4">
                    <div class="form-group">
                        <h5 class="text-muted text-center">Member Baru</h5>
                        <h3 class="text-dark text-center mt-1"><b>Halaman Registrasi</b></h3>
                        <h5 class="text-muted text-center mt-1">Sudah Member? <a href="{{ route('login')}}" class="text-decoration-none text-opaque-links">Login Disini</a></h5>
                    </div>
                    <div class="form-group">
                        <div class="fontuser">
                        <label for="name">{{ __('Nama Lengkap') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder= "Masukkan Nama Lengkap Anda" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                        
                    </div>
                    <div class="form-group">
                        <div class="fontuser">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email Anda" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="fontuser">
                            <label for="password">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password"  required autocomplete="new-password" autofocus>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="bi bi-eye-fill" id="togglePassword"></i>
                        </div>
                    </div>
                        <div class="form-group">
                                <div class="fontuser">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password"  required autocomplete="new-password" autofocus>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="fontuser">
                                <label for="username">{{ __('Username') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Masukkan Username"  required autocomplete="username" autofocus>
                                @error('username')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="bi bi-person-circle"></i>
                            </div>
                      </div>
                      <div class="form-group">
                        <div class="fontuser">
                            <label for="school">{{ __('Sekolah') }}</label>
                            <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" name="school" placeholder="Masukkan Sekolah Anda" required autocomplete="school" autofocus>
                            @error('school')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="bi bi-book-fill"></i>
                        </div>
                  </div>
                  <div class="form-group">
                    <div class="fontuser">
                        <label for="city">{{ __('Kota') }}</label>
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" placeholder="Masukkan Kota Tinggal"  required autocomplete="city" autofocus>
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <i class="bi bi-bank2"></i>
                    </div>
              </div>
              <div class="form-group">
                <div class="fontuser">
                    <label for="birthyear">{{ __('Tahun Lahir') }}</label>
                    <input id="birthyear" type="text" class="form-control @error('birthyear') is-invalid @enderror" name="birthyear" placeholder="Masukkan Tahun Lahir"  required autocomplete="birthyear" autofocus>
                    @error('birthyear')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                </div>
          </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn btn-opaque rounded-circleX px-5 text-center mt-4"><b>
                        {{ __('Bikin Akun') }}</b>
                    </button>
                </div>
                </div>      
        </div>
    </div>
</form>
</div>

</div>
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
