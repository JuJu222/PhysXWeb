@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-center mt-5 me-5">
    <span><h2 class="mt-3 fw-bold purple">{{ $topic->topic_name }}</h2></span>
</div>
<div class="mt-5 me-5">
@yield('topic_content')
</div>
<div class="d-flex justify-content-center mt-5 me-5">
    <h3 class="fw-bolder">Mari tantang diri anda dan dapatkan skor yang terbaik!</h3>
</div>
<div class="d-flex justify-content-center mt-5 me-5">
    <a href="{{ route('questionSoal', $topicsEasy) }}" class="btn btn-primary btn-lg mx-5" type="button">Mudah</a>
    <a href="{{ route('questionSoal', $topicsHard) }}" class="btn btn-primary btn-lg mx-5 "type="button">Susah</a>
</div>
@endsection
