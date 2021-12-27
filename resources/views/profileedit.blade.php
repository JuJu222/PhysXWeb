@extends('layouts.apps')
@include('partials.sidebar')
@section('content')

    <main>
        <section>
          <div class="dashboard">

            <div class="update">
                <form action="{{ route('profile.update', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Username: </label>
                        <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                    </div>
                    <div class="form-group">
                        <label>Email: </label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <label>School: </label>
                        <input type="text" class="form-control" name="school" value="{{ $user->school }}" required>
                    </div>
                    <div class="form-group">
                        <label>City: </label>
                        <input type="text" class="form-control" name="city" value="{{ $user->city }}" required>
                    </div>
                    <div class="form-group">
                        <label>Year: </label>
                        <input type="number" class="form-control" name="birthyear" value="{{ $user->birthyear }}" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Edit Player</button>
                        <a class="btn btn-danger" href="{{ route('profile.index') }}">Cancel</a>
                    </div>
                </form>
            </div>

          </div>
        </section>
    </main>


@endsection