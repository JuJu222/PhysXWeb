@extends('layouts.apps')
@include('partials.sidebar')
@section('content')

    {{--<img src="https://wallpapercave.com/wp/fkIqItv.png">  --}}
    <div class="home_content">
        <div class="d-flex justify-content-end mt-5 me-5">
            <span><h5 class="mt-3 fw-bold purple">Justin Jap</h5></span>
            <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle ms-3" width="60" height="20">
        </div>
        <div class="d-flex justify-content-center mt-5">
            <h1 class="purple"><b>Shop</b></h1>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <h4><b>Tambah item shop</b></h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <form method="POST" action="{{ route('login') }}" class="form-shop">
                @csrf
                <div class="form-group">
                        <div class="fontuser">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukkan Email Anda">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                </div>
                <div class="form-group">
                        <div class="fontuser">
                            <label for="password">{{ __('Password') }}</label>
                            <input type="text" class="form-control" placeholder="Masukkan Password Anda">
                            <i class="bi bi-eye-fill" id="togglePassword"></i>
                        </div>
                </div>
                <div class="form-group">
                    <div class="d-flex col-md-12 justify-content-center align-items-center mt-3">
                        <button type="submit" class="btn btn-opaque rounded-circleX px-5"><b>Tambah</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
