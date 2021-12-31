@extends('layouts.apps')
@section('content')

    <main class="mt-5">
        <section class="p-5">
          <div class="dashboard">

            <div class="user">
                <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle ms-3 pp" width="120" height="120">
              <h1 class="purple name"><b>{{$user->name}}</b></h1>
              <h2 class="purple">{{$user->username}}</h2>
            </div>

            <div class="biodata my-5">
              <div class="data">
                <h5><b>Email: </b>{{$user->email}}</h5>
              </div>
              <div class="data">
                <h5><b>School: </b>{{$user->school}}</h5>
              </div>
              <div class="data">
                <h5><b>City: </b>{{$user->city}}</h5>
              </div>
              <div class="data">
                <h5><b>Birthyear: </b>{{$user->birthyear}}</h5>
              </div>
            </div>

            <div class="buttonedit">
                <a class="btn btn-primary btn-lg" href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            </div>
          </div>

          <div class="history">
              <h1><b>Game History: </b></h1>
            <div class="cards mt-3">
                @foreach($history as $item)
                    <div class="card mb-3 p-3">
                        <img src="./images/assassins.png" alt="" />
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
