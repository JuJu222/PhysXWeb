@extends('layouts.apps')
@include('partials.sidebar')
@section('content')




<div class="container justify-content-center align-items-center">
<div class="d-flex justify-content-center align-items-center ms-5 text-center">
<div class="row form-content mt-auto rounded px-5 pt-5 pb-4">
<h1 class="mb-3 text-opaque-links">Question {{ $question->question_id . "/10 "}}</h1>
<img src="{{ asset('img/' . $question->image_path)}}" width="300px" height="300px">
<h1 class="mt-3">{{ $question->question }}</h1>
<div class="container">
<hr class="d-flex justify-content-center align-items-center mx-5">
</div>
{{-- <img src="{{ asset('storage/job/'.$job->image) }}" alt="job image" title="job image"> --}}
<div class ="col-lg-12">
<div class="form-group d-flex justify-content-center align-items-center">
<div class="col-md-6">
@if(Session::has('answerCorrect'))
@if($question->question_id < 11)
    <div class="alert alert-success">
        <h3>{{ Session::get('answerCorrect') }}</h3>
        <a href="/question/{{ $topic->topic_id }}/{{ $question->question_id + 1}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Soal Berikut</a>
    </div>
@endif
@endif

@if(Session::has('answerWrong'))
@if (!$question->question_id < 11)
    <div class="alert alert-danger">
        <h3>{{ Session::get('answerWrong') }}</h3>
        <a href="/question/{{ $topic->topic_id }}/{{ $question->question_id + 1}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Soal Berikut</a>
    </div>
@endif
@endif

@if($question->question_type == "mcq")
 @foreach($option as $o)
 <form action="/question/{{ $topic->topic_id }}/{{ $question->question_id }}" method="POST">
 @csrf
 <input name="choice" class="form-quiz mt-4" type="submit" value="{{ $o->option }}">
 @endforeach
</form>

@elseif($question->question_type == "fitb")
<form action="/question/{{ $topic->topic_id }}/{{ $question->question_id }}" method="POST">
@csrf
<input name="choice" class="form-fitb mt-4" type="text" value="">
<h4>Fill in the Blanks</h4>
</form>

@elseif($question->question_type == "tof")
<form action="/question/{{ $topic->topic_id }}/{{ $question->question_id }}" method="POST">
@csrf
<div class="d-flex justify-content-center align-items-center  align-items-center">
<div class="col-md-6 d-flex justify-content-center align-items-center mr-5">
<h1><input name="choice" class="form-true mt-4 mr-5" type="submit" value=true><h1>
<h1><input name="choice" class="form-false mt-4 ms-5" type="submit" value=false><h1>
</div>
</form>
@endif

 </div>
</div>
</div>
</div>
</div>
</div>
</div>