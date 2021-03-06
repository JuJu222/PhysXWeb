@extends('layouts.apps')
@section('title', 'Question - PhysXWeb')
@section('content')

    <div class="container justify-content-center align-items-center mt-5">
        <div class="d-flex justify-content-center align-items-center text-center">
            <div class="row form-content mt-auto rounded px-5 pt-5 pb-4">
                <h1 class="mb-3 text-opaque-links">Question {{ Session::get("nosoal") }}/{{ count($questions) }}</h1>
                @if ($question->image_path != null)
                    <img src="{{ $question->image_path }}" width="300px" height="300px">
                @endif
                <h2 class="mt-3 text-center">{{ $question->question }}</h2>
                <div class="result-score mx-auto my-2 px-3 py-2 d-flex align-items-center">
                    <h4 class="result-score-total d-inline mb-0 mr-2">Skor: {{ $question->score }}</h4>
                    <img src="{{ asset('img/score-symbol.svg') }}" alt="Skor">
                </div>
                <div class="container">
                    <hr class="d-flex justify-content-center align-items-center">
                </div>
                {{-- <img src="{{ asset('storage/job/'.$job->image) }}" alt="job image" title="job image"> --}}
                <div class="col-lg-12">
                    <div class="form-group d-flex justify-content-center align-items-center">
                        <div class="col-md-10">

                            @if(Session::has('answerCorrect'))
                                <div class="alert alert-success">
                                    <h3>{{ Session::get('answerCorrect') }}</h3>
                                    <form action="/questions/{{ $topic->topic_id }}"
                                          method="POST">
                                        @csrf
                                        <h1>
                                            <button name="alert" class="form-berikut mt-4 mr-5" type="submit" value=1>Soal
                                                Berikut
                                            </button>
                                        </h1>
                                    </form>
                                </div>
                            @endif

                            @if(Session::has('answerWrong'))
                                <div class="alert alert-danger">
                                    <h3>{{ Session::get('answerWrong') }}</h3>
                                    <form action="/questions/{{ $topic->topic_id }}"
                                          method="POST">
                                        @csrf
                                        <h1>
                                            <button name="alert" class="form-berikut mt-4 mr-5" type="submit" value=1>Soal
                                                Berikut
                                            </button>
                                        </h1>
                                    </form>
                                </div>
                            @endif


                            @if(!Session::has('answerCorrect') && (!Session::has('answerWrong')))
                            @if($question->question_type == "mcq")
                                @foreach($option as $o)
                                    <form action="/questions/{{ $topic->topic_id }}"
                                          method="POST">
                                        @csrf
                                        <input name="choice" class="form-quiz mt-4" type="submit"
                                               value="{{ $o->option }}">
                                        @endforeach
                                    </form>

                                    @elseif($question->question_type == "fitb")
                                        <form action="/questions/{{ $topic->topic_id }}"
                                              method="POST">
                                            @csrf
                                            <input name="choice" class="form-fitb mt-4" type="text" value="">
                                            <h4 class="mt-4">Fill in the Blanks</h4>
                                            <button name="submit" class="btn btn-opaque rounded-circleX px-5 mx-auto mt-2 btn-larger font-weight-bold" type="submit"
                                                                value="Submit">Submit
                                            </button>
                                        </form>

                                    @elseif($question->question_type == "tof")
                                        <form action="/questions/{{ $topic->topic_id }}"
                                              method="POST">
                                            @csrf
                                            <div
                                                class="d-flex justify-content-center align-items-center  align-items-center">
                                                <div
                                                    class="col-md-6 d-flex justify-content-center align-items-center mr-5">
                                                    <h1>
                                                        <button name="choice" class="form-true mt-4 mr-5" type="submit"
                                                                value=1>True
                                                        </button>
                                                    </h1>
                                                    <h1>
                                                        <button name="choice" class="form-false mt-4 ms-5" type="submit"
                                                                value=0>False
                                                        </button>
                                                    </h1>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                    @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
