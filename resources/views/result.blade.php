@extends('layouts.apps')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <h1 class="purple"><b>Result</b></h1>
    </div>
    <div class="d-flex justify-content-center mt-3 flex-column">
        <div class="result-circle-border mx-auto">
            <div class="result-circle d-flex flex-column justify-content-center mx-auto">
                <h1 class="mx-auto result-percentage">{{ $result['accuracy'] }}%</h1>
                <h4 class="mx-auto result-ketepatan">Ketepatan</h4>
            </div>
        </div>
        <div class="result-score mx-auto mt-5 px-3 py-2 d-flex align-items-center">
            <h4 class="result-score-total d-inline mb-0 mr-2">Skor Total: {{ $result['total_score'] }}</h4>
            <img src="{{ asset('img/score-symbol.svg') }}" alt="Points">
        </div>
        <div class="result-coin mx-auto mt-2 mb-5 px-3 py-2 d-flex align-items-center">
            <h4 class="result-score-total d-inline mb-0 mr-2">Coins: +25</h4>
            <img src="{{ asset('img/coin.svg') }}" alt="Skor">
        </div>
    </div>
    <div class="justify-content-start mx-5 result-info">
        <div class="result-info-container">
            <h4>Jawaban benar</h4>
            <h3>{{ $result['total_correct'] }}/{{ $result['total_questions'] }} Soal</h3>
        </div>
        <div class="col result-info-container mt-5">
            <h4>Waktu yang dibutuhkan</h4>
            @if ($result['total_minutes'] == 0)
                <h3>{{ $result['total_seconds'] }} detik</h3>
            @else
                <h3>{{ $result['total_minutes'] }} menit {{ $result['total_seconds'] }} detik</h3>
            @endif
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('home') }}" class="btn btn-opaque rounded-circleX px-5 mx-auto btn-larger">
                <b>Continue</b>
            </a>
        </div>
    </div>
@endsection
