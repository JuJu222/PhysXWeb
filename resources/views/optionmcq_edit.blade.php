@extends('layouts.apps')
@section('title', 'Options - PhysXWeb')
@section('content')
<form action="{{ route('optionmcq.update', $options->option_mcq_id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
     <div class="d-flex justify-content-center">
         <h3 class="mt-5">Option MCQ Edit Page</h3>
     </div>
    <div class="container-sm rounded p-3 mt-4 border border-dark col-md-6">

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Option</label>
        <input type="text" class="form-control {{ $errors->has('option') ? 'error' : '' }}" name="option"
            id="option" value= "{{ $options->option }}" }}>

        @if ($errors->has('option'))
        <div class="error text-dark">
            {{ $errors->first('option') }}
        </div>
        @endif
      </div>

      <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Is Correct</label>
        <select class="form-select {{ $errors->has('iscorrect') ? 'error' : '' }}" name="iscorrect" id="iscorrect">
            {{-- @foreach($options as $option) --}}
            @if($options->is_correct == "1")
            <option value="{{ $options->is_correct }}" selected>Correct</option>
            <option value="0">Not Correct</option>
            @elseif($options->is_correct == "0")
            <option value="1">Correct</option>
            <option value="{{ $options->is_correct }}" selected>Not Correct</option>
           @endif
           {{-- @endforeach --}}
        </select>

        @if ($errors->has('iscorrect'))
        <div class="error text-dark">
            {{ $errors->first('iscorrect') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Question Number</label>
        <select class="form-select {{ $errors->has('question') ? 'error' : '' }}" name="question">
        @foreach($questions as $question)
        @if($options->question_id == $question->question_id)
        <option value="{{ $question->question_id }}" selected>{{ $question->question_id }}</option>
        @else
        <option value="{{ $question->question_id }}">{{ $question->question_id }}</option>
        @endif
        @endforeach
        </select>


        @if ($errors->has('question'))
        <div class="error text-dark">
            {{ $errors->first('question') }}
        </div>
        @endif
    </div>
    <div class="container-sm mb-3">
        <input type="submit" name="send" value="Submit" class="btn btn-success btn-block mb-3">
        </div>
</div>
</form>
@endsection
