@extends('layouts.apps')
@include('partials.sidebar')
@section('content')

    {{--<img src="https://wallpapercave.com/wp/fkIqItv.png">  --}}
    <div class="d-flex justify-content-end mt-5 me-5">
        <span><h5 class="mt-3 fw-bold purple">Justin Jap</h5></span>
        <img src="https://github.com/mdo.png" alt="mdo" class="rounded-circle mx-3" width="60" height="20">
    </div>
    <div class="d-flex justify-content-center mt-5">
        <h1 class="purple"><b>Shop</b></h1>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <h4><b>Pilihlah subtopik yang ingin anda tantang!</b></h4>
    </div>
    <div class="justify-content-start mt-3 mx-5">
        <h1 class="purple mb-3"><b>Titles</b></h1>
        @foreach($titles as $title)
            <div class="my-3 row border-bottom">
                <div class="col">
                    <h2>{{ $title->item }}</h2>
                    <p>Price: {{ $title->price }}</p>
                </div>
                <div class="col-md-auto">
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="justify-content-start mt-5 mx-5">
        <h1 class="purple mb-3"><b>Avatars</b></h1>
        @foreach($titles as $title)
            <div class="my-3 row border-bottom">
                <div class="col">
                    <h2>{{ $title->item }}</h2>
                    <p>Price: {{ $title->price }}</p>
                </div>
                <div class="col-md-auto">
                    <a href="#" class="btn btn-primary">Buy</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-start mt-3 mx-5">
        <a href="{{ route('shop.create') }}">Create</a>
    </div>


@endsection