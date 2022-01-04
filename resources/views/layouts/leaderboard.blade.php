@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-end mt-5 me-5">
    <span><h5 class="mt-3 fw-bold purple">Justin Jap</h5></span>
    <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle ms-3" width="60" height="60">       
</div>
<div class="d-flex justify-content-center mt-5 me-5">
    <span><h2 class="mt-3 fw-bold purple">{{ $topic->topic_name }}</h2></span>     
</div>
<div>
@yield('leaderboard_content')
</div>
@endsection