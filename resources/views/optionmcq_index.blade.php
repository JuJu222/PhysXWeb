@extends('layouts.apps')
@section('content')

<div class = "container mt-5">
    <h1 class = "text-center">Admin Option MCQ Page</h1>
    <div class= "container d-flex align-items-center justify-content-center mt-4">
    @if(Session::has('success'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif

        @if(Session::has('createdOption'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('createdOption') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif

        @if(Session::has('updatedOption'))
        <h4 class = "alert alert-info text-center col-md-6">{{ Session::get('updatedOption') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </h4>
        @endif
    </div>


<div class="pull-right ml-3">
    <a href="/admin/optionmcq/create" class="btn btn-success mb-3 mt-5">Create new Option</a>
  </div>
    <table class="table table-bordered col-md-12 rounded text-center">
      <tr class='border text-opaque-links' style="vertical-align:middle">
          <th>Option ID</th>
          <th>Option</th>
          <th>Is Correct</th>
          <th>Question ID</th>
          <th>Alter Data</th>
      </tr>
      @foreach ($options as $option)
      <tr class='border' style="vertical-align:middle">
          <td class='border text-danger text-center'><b>{{ $option->option_mcq_id }}</b></td>
          <td class='border'>{{ $option->option}}</td>
          <td class='border'>{{ $option->is_correct }}</td>
          <td class='border'><b>{{ $option->question_id}}</b></td>

          <td style='white-space: nowrap'>
                  <form action="{{ route('optionmcq.destroy',$option->option_mcq_id) }}" method="post">
                   @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Are you sure?')"><i class="bi bi-trash-fill"></i></button>
                  <a class="btn btn-purple mt-2" href="/optionmcq/{{ $option->option_mcq_id }}/edit"><i class="bi bi-pencil"></i></a>
                  </form>
          </td>
      </tr>
      @endforeach
  </table>
  <div class="d-flex justify-content-end">
    {{ $options->links() }}
    </div>

    <div class="row rounded">
        <div class="col-md-12">
        <div class="text-center rounded-circle d-flex justify-content-center align-items-center">
          <h3><a href="/question" class="btn btn-opaque  mr-4 mb-3 mt-5">Back to Questions</a></h3>
        </div>
        </div>
      </div>
</div>
@endsection
