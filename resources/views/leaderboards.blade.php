@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-end mt-5 me-5">
    <span><h5 class="mt-3 fw-bold purple">Justin Jap</h5></span>
    <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle ms-3" width="60" height="60">       
</div>
@if(empty($topic->topic_name))
<div class="d-flex justify-content-center mx-auto">
    <span><h2 class="mt-3 fw-bold purple">Peringkat Keseluruhan</h2></span>     
</div>
@else
<div class="d-flex justify-content-center mx-auto">
    <span><h2 class="mt-3 fw-bold purple">Peringkat {{ $topic->topic_name }}</h2></span>     
</div>
@endif
<div class="mx-auto mt-5 d-flex justify-content-center">
    <div class="card p-2"><a href="{{ route('leaderboards.index') }}">Keseluruhan</a></div>
</div>
<div class="mx-auto mt-5 d-flex justify-content-center"><h4>Mudah</h4></div>
<div class="mx-auto d-flex justify-content-around">
    <div class="card p-2"><a href="{{ route('leaderboards.show', 1) }}">Besaran dan Satuan</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 2) }}">Vektor</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 3) }}">Gerak Lurus</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 4) }}">Gerak Parabola</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 5) }}">Gerak Melingkar Beraturan</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 6) }}">Hukum Newton (Gerak)</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 7) }}">Hukum Newton (Gravitasi)</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 8) }}">Usaha dan Energi</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 9) }}">Momentum dan Impuls</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 10) }}">Getaran Harmonis</a></div>
</div>
<div class="mx-auto mt-5 d-flex justify-content-center"><h4>Susah</h4></div>
<div class="mx-auto d-flex justify-content-around">
    <div class="card p-2"><a href="{{ route('leaderboards.show', 11) }}">Besaran dan Satuan</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 12) }}">Vektor</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 13) }}">Gerak Lurus</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 14) }}">Gerak Parabola</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 15) }}">Gerak Melingkar Beraturan</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 16) }}">Hukum Newton (Gerak)</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 17) }}">Hukum Newton (Gravitasi)</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 18) }}">Usaha dan Energi</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 19) }}">Momentum dan Impuls</a></div>
    <div class="card p-2"><a href="{{ route('leaderboards.show', 20) }}">Getaran Harmonis</a></div>
</div>
<div class="mx-5 my-5 d-flex justify-content-center">
    <!--template-->
    
    <table class="my-3">
        @foreach($leaderboard as $l)
        <tr>
            <th rowspan="2"><div class="card rounded-pill py-3 px-lg-5"><h3 class="mx-auto my-auto">{{ $loop->index + 1 }}</h3></div></th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><h4>{{ $l->name }}</h4></th>
        </tr>
        <tr>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th><h5>{{ $l->total_score }}</h5></th>
        </tr>
        @endforeach
    </table>
    
</div>
@endsection