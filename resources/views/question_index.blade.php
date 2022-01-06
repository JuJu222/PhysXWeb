@extends('layouts.apps')
@section('content')

<div class = "container mt-5">
    <h1 class = "text-center">Admin Question Page</h1>
    <div class= "container d-flex align-items-center justify-content-center ">
    @if(Session::has('success'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif

        @if(Session::has('createdQuestion'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('createdQuestion') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif

        @if(Session::has('updatedQuestion'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('updatedQuestion') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif
    </div>


<div class="pull-right ml-3">
    <a href="/admin/question/create" class="btn btn-success mb-3 mt-5">Create new Question</a>
  </div>
    <table class="table table-bordered col-md-12 rounded text-center">
      <tr class='border text-opaque-links' style="vertical-align:middle">
          <th>Question ID</th>
          <th>Question Type</th>
          <th>Question</th>
          <th>Score</th>
          <th>image_path</th>
          <th>Topic ID</th>
          <th>Alter Data</th>
      </tr>
      @foreach ($questions as $question)
      <tr class='border' style="vertical-align:middle">
          <td class='border text-danger text-center'><b>{{ $question->question_id }}</b></td>
          <td class='border'>{{ Str::upper($question->question_type) }}</td>
          <td class='border'>{{ $question->question}}</td>
          <td class='border'>{{ $question->score}}</td>
          <td class='border'>{{ $question->image_path}}</td>
          <td class='border text-success text-center'><b>{{ $question->topic_id}}</b></td>
          <td style='white-space: nowrap'>
                  <form action="{{ route('question.destroy',$question->question_id) }}" method="post">
                   @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                  <a class="btn btn-purple" href="/admin/question/{{ $question->question_id }}/edit"><i class="bi bi-pencil"></i></a>
                  </form>

          </td>
      </tr>
      @endforeach
  </table>
  <div class="d-flex justify-content-end">
    {{ $questions->links() }}
    </div>

    <div class="row rounded">
        <div class="col-md-12">
        <div class="text-center rounded-circle d-flex justify-content-center align-items-center">
          <h3><a href="/optionmcq" class="btn btn-primary  mr-4 mb-3 mt-5">Options MCQ</a></h3>
          <h3><a href="/optionfitb" class="btn btn-danger  mb-3 mt-5">Options FITB</a></h3>
          <h3><a href="/optiontof" class="btn btn-success  ml-4 mb-3 mt-5">Options TOF</a></h3>
        </div>
        </div>
      </div>

</div>


@endsection
