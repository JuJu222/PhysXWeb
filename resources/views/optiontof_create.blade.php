@extends('layouts.apps')
@section('title', 'Options - PhysXWeb')
@section('content')
<form action="{{ route('optiontof.store') }}" method="post" enctype="multipart/form-data">
    @csrf
     <div class="d-flex justify-content-center">
         <h3 class="mt-5">Option TOF Create Page</h3>
     </div>
    <div class="container-sm rounded p-3 mt-4 border border-dark col-md-6">

        <div class="form-group">
            <label class="text-opaque-links font-weight-bold">True or False</label>
            <select class="form-select {{ $errors->has('trueorfalse') ? 'error' : '' }}" name="trueorfalse" id="trueorfalse">
                <option value="1">True</option>
                <option value="0">False</option>
            </select>

            @if ($errors->has('trueorfalse'))
            <div class="error text-dark">
                {{ $errors->first('trueorfalse') }}
            </div>
            @endif
        </div>

    <div class="form-group">
        <label class="text-opaque-links font-weight-bold">Question Number</label>
        <select class="form-select {{ $errors->has('question') ? 'error' : '' }}" name="question">
        @foreach($questions as $question)
        <option value="{{ $question->question_id}}">{{ $question->question_id }}</option>
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
