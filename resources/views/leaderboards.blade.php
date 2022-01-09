@extends('layouts.apps')
@section('title', 'Leaderboard - PhysXWeb')
@section('content')
<div class="d-flex justify-content-center mt-5">
    <h1><b>Leaderboard</b></h1>
</div>
<div class="mx-auto mt-3 d-flex justify-content-center">
    <a class="btn btn-opaque rounded-circleX px-4 font-weight-bold text-center mb-3 btn-larger" href="{{ route('leaderboards.index') }}">Keseluruhan</a>
</div>
<div class="row-leaderboard d-flex justify-content-center align-content-center">


    <a class="btn btn-opaque rounded-circleX font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 1) }}">Besaran dan Satuan</a>
    <a class="btn btn-opaque rounded-circleX font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 2) }}">Vektor</a>
    <a class="btn btn-opaque rounded-circleX font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 3) }}">Gerak Lurus</a>
    <a class="btn btn-opaque rounded-circleX font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 4) }}">Gerak Parabola</a>
    <a class="btn btn-opaque rounded-circleX  font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 5) }}">Gerak Melingkar Beraturan</a>
    <a class="btn btn-opaque rounded-circleX  font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 6) }}">Hukum Newton (Gerak)</a>
    <a class="btn btn-opaque rounded-circleX font-weight-bold text-center  p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 7) }}">Hukum Newton (Gravitasi)</a>
    <a class="btn btn-opaque rounded-circleX  font-weight-bold text-center  p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 8) }}">Usaha dan Energi</a>
    <a class="btn btn-opaque rounded-circleX  font-weight-bold text-center  p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 9) }}">Momentum dan Impuls</a>
    <a class="btn btn-opaque rounded-circleX  font-weight-bold text-center p-2 mx-1 mt-3" href="{{ route('leaderboards.show', 10) }}">Getaran Harmonis</a>

</div>
@if(empty($topic->topic_name))
    <div class="d-flex justify-content-center mx-auto mt-5">
        <h2 class="fw-bold purple">Peringkat Keseluruhan</h2>
    </div>
@else
    <div class="d-flex justify-content-center mx-auto mt-5">
        <h2 class="fw-bold purple">Peringkat {{ $topic->topic_name }}</h2>
    </div>
    <div class="mx-auto d-flex flex-wrap justify-content-center">
        @if ($topic->difficulty == 'easy')
            <a class="btn btn-opaque rounded-circleX px-4 font-weight-bold text-center mx-2 py-3" href="{{ route('leaderboards.show', $topic->topic_id) }}">Easy</a>
            <a class="btn btn-opaque rounded-circleX px-4 font-weight-bold text-center mx-2 py-3" href="{{ route('leaderboards.show', $topic->topic_id + 10) }}">Hard</a>
        @else
            <a class="btn btn-opaque rounded-circleX px-4 font-weight-bold text-center mx-2 py-3" href="{{ route('leaderboards.show', $topic->topic_id - 10) }}">Easy</a>
            <a class="btn btn-opaque rounded-circleX px-4 font-weight-bold text-center mx-2 py-3" href="{{ route('leaderboards.show', $topic->topic_id) }}">Hard</a>
        @endif
    </div>
@endif
<div class="mx-5 my-4 leaderboard-row">
    <!--template-->
    @foreach($leaderboard as $l)
        <div class="row justify-content-center align-items-center mb-5 w-50 mx-auto leaderboard-row">
            <div class="col mx-2">
                <h3 class="font-weight-bold purple">{{ $loop->index + 1 }}</h3>
            </div>
            <div class="col mx-2">
                @if ($l->avatar != null)
                    <img src="{{ asset('img/avatars/' . $l->avatar) }}" class="leaderboard-avatar" alt="Avatar">
                @else
                    <img src="{{ asset('img/avatars/avatar_1.png') }}" class="leaderboard-avatar" alt="Avatar">
                @endif
            </div>
            <div class="col mx-2">
                <h4 class="font-weight-bold">{{ $l->name }}</h4>
                @if ($l->title != null)
                    <p class="purple my-1">{{ $l->title }}</p>
                @else
                    <p class="purple my-1">Novice</p>
                @endif
            </div>
            <div class="col mx-2">
                <div class="result-score px-3 py-2 d-flex align-items-center">
                    <h5 class="result-score-total d-inline mb-0 mr-2">{{ $l->total_score }}</h5>
                    <img src="{{ asset('img/score-symbol.svg') }}" alt="Points" width="25px">
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
