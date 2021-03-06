@extends('layouts.apps')
@section('title', 'Profile - PhysXWeb')
@section('content')

    <main class="mt-5">
        <section class="p-5">
            <div class="dashboard">

                <div class="user">
                    @isset ($userAvatar)
                        <img src="{{ asset('img/avatars/' . $userAvatar) }}" class="avatar-profile" alt="Avatar">
                    @else
                        <img src="{{ asset('img/avatars/avatar_1.png') }}"
                             class="avatar-profile" alt="Avatar">
                    @endisset
                    <h1 class="name mt-4"><b>{{$user->name}}</b></h1>
                    @isset ($userTitle)
                        <h2 class="purple my-1">{{ $userTitle }}</h2>
                    @else
                        <h4 class="purple my-1">Novice</h4>
                    @endisset
                </div>

                <div class="biodata my-4">
                    <div class="data">
                        <h5><b class="purple">Username: </b>{{$user->username}}</h5>
                    </div>
                    <div class="data">
                        <h5><b class="purple">Email: </b>{{$user->email}}</h5>
                    </div>
                    <div class="data">
                        <h5><b class="purple">School: </b>{{$user->school}}</h5>
                    </div>
                    <div class="data">
                        <h5><b class="purple">City: </b>{{$user->city}}</h5>
                    </div>
                    <div class="data">
                        <h5><b class="purple">Birthyear: </b>{{$user->birthyear}}</h5>
                    </div>
                </div>

                <div class="buttonedit">
                    <a class="btn btn-opaque rounded-circleX px-4 btn-larger font-weight-bold" href="{{ route('profile.edit', $user->id) }}">Ubah Profile</a>
                </div>

                <div class="buttonedit">
                    <a class="btn btn-opaque rounded-circleX px-4 btn-larger font-weight-bold mt-3 btn-logout" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>

            <div class="history">
                <h1><b>Riwayat Game: </b></h1>
                <div class="cards mt-3">
                    @foreach($history as $item)
                        <div class="card mb-3 p-3">
                            <img src="./images/assassins.png" alt=""/>
                            <div class="card-info">
                                <h4><b>{{ $item->topic_name }}</b></h4>
                                <h5><b>Tingkat kesulitan: </b>{{ $item->difficulty }}</h5>
                            </div>
                            <h5><b>Skor: </b>{{ $item->total_score }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


@endsection
