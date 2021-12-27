@extends('layouts.apps')
@include('partials.sidebar')
@section('content')

    <main>
        <section>
          <div class="dashboard">

            <div class="user">
                <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle ms-3 pp" width="120" height="120">
              <h1 class="purple name"><b>{{$user->name}}</b></h1>
              <h2 class="purple">{{$user->username}}</h2>
            </div>

            <div class="biodata">
              <div class="data">
                <h3><b>Email: </b>{{$user->email}}</h3>
              </div>
              <div class="data">
                <h3><b>School: </b>{{$user->school}}</h3>
              </div>
              <div class="data">
                <h3><b>City: </b>{{$user->city}}</h3>
              </div>
              <div class="data">
                <h3><b>Birthyear: </b>{{$user->birthyear}}</h3>
              </div>
            </div>

            <div class="buttonedit">
                <a class="btn btn-primary btn-lg" href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            </div>
          </div>

          <div class="history">
              <h1><b>Game History: </b></h1>
            <div class="cards">

              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>
              <div class="card">
                <img src="./images/assassins.png" alt="" />
                <div class="card-info">
                  <h2><b>Chapter 1</b></h2>
                  <p>Easy</p>
                </div>
                <h2><b>Score: </b>100</h2>
              </div>

            </div>
          </div>
        </section>
    </main>


@endsection