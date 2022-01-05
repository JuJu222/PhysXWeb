@extends('layouts.apps')
@section('content')

    <main class="mt-5">
        <section class="p-5">
            <div class="dashboard">

                <div class="user">
                    @isset ($userAvatar)
                        <img src="{{ $userAvatar }}" class="avatar" alt="Avatar">
                    @else
                        <img src="https://drive.google.com/uc?export=view&id=1YW9i_gxGd2H66Rqa5YICNA2S30dUTeN-"
                             width="140px" alt="Avatar">
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
                    <a class="btn btn-opaque rounded-circleX px-4 btn-larger font-weight-bold" href="{{ route('profile.edit', $user->id) }}">Edit
                        Profile</a>
                </div>
            </div>

            <div class="history">
                <h1><b>Game History: </b></h1>
                <div class="cards mt-3">
                    @foreach($history as $item)
                        <div class="card mb-3 p-3">
                            <img src="./images/assassins.png" alt=""/>
                            <div class="card-info">
                                <h4><b>{{ $item->topic_name }}</b></h4>
                            </div>
                            <h5><b>Score: </b>{{ $item->total_score }}</h5>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>


@endsection
