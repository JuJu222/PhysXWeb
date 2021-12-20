@extends('layouts.apps')
@include('partials.sidebar')
@section('content')
<form action="{{ route('question.update',$questions->question_id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
     <div class="d-flex justify-content-center">
         <h3 class="mt-5">Question Edit Page</h3>
     </div>
    <div class="container-sm rounded p-3 mt-4 border border-dark col-md-6">

        <div class="form-group">
            <label class="text-opaque-links font-weight-bold">Question Number</label>
            <input type="text" class="form-control {{ $errors->has('number') ? 'error' : '' }}" name="number"
                        id="number" value="{{ $questions->question_id }}">
                    @if ($errors->has('number'))
                    <div class="error text-dark">
                        {{ $errors->first('number') }}
                    </div>
                    @endif
                  </div>
    
    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Question Type</label>
        <select class="form-select {{ $errors->has('type') ? 'error' : '' }}" name="type" id="type">
            @if($questions->question_type == "mcq")
            <option value="{{ $questions->question_type }}" selected>Multiple Choice Question</option>
            <option value="fitb">Fill in the Blanks</option>
            <option value="tof">True or False</option>
            @elseif($questions->question_type == "fitb")
            <option value="mcq">Multiple Choice Question</option>
            <option value="{{ $questions->question_type }}" selected>Fill in the Blanks</option>
            <option value="tof">True or False</option>
            @elseif($questions->quesiton_type == "tof")
            <option value="mcq">Multiple Choice Question</option>
            <option value="fitb">Fill in the Blanks</option>
            <option value="{{ $questions->question_type }}" selected>True or False</option>
            @endif
        </select>

        @if ($errors->has('type'))
        <div class="error text-dark">
            {{ $errors->first('type') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Question</label>
        <textarea class="form-control {{ $errors->has('question') ? 'error' : '' }}" name="question" id="question"
            rows="4">{{ $questions->question }}</textarea>

        @if ($errors->has('question'))
        <div class="error text-dark">
            {{ $errors->first('question') }}
        </div>
        @endif
      </div>

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Question Image</label>
        <input type="file" class="form-control {{ $errors->has('image') ? 'error' : '' }}" name="image"
            id="image" value="{{ $questions->image_path }}">

        @if ($errors->has('image'))
        <div class="error text-dark">
            {{ $errors->first('image') }}
        </div>
        @endif
    </div>

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Topic</label>
        <select class="form-select {{ $errors->has('topic') ? 'error' : '' }}" name="topic">
         @foreach($topics as $topic)
        @if($topic->topic_id == $questions->topic_id)
        <option value="{{ $topic->topic_id}}" selected>{{ $topic->topic }}</option>
        @else
        <option value="{{ $topic->topic_id }}">{{ $topic->topic }}</option>
        @endif
        @endforeach
        </select>


        @if ($errors->has('topic'))
        <div class="error text-dark">
            {{ $errors->first('topic') }}
        </div>
        @endif
    </div>
    <div class="container-sm mb-3">
        <input type="submit" name="send" value="Submit" class="btn btn-success btn-block mb-3">
        </div> 
</div>
</form> 
@endsection