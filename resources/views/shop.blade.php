@extends('layouts.apps')
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
            <div class="py-3 row border-bottom">
                <div class="col">
                    <h2>{{ $title->item }}</h2>
                    <p>Price: {{ $title->price }}</p>
                </div>
                <div class="col-md-auto text-right">
                    <form action="{{ route('shop.buy', $title->shop_item_id) }}" method="POST">
                        @csrf
                        @if ($fis10user->title == $title->shop_item_id)
                            <button type="submit" class="btn btn-primary" disabled>Buy</button>
                            <p class="mt-2">You already own this item.</p>
                        @else
                            <button type="submit" class="btn btn-primary">Buy</button>
                        @endif
                    </form>
                    @if (auth()->user()->role == 'admin')
                        <a href="{{ route('shop.edit', $title->shop_item_id) }}" class="btn btn-primary mt-1">Edit</a>
                        <form class="mt-1" id="form_delete" action="{{ route('shop.destroy', $title->shop_item_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="justify-content-start mt-3 mx-5">
        <h1 class="purple mb-3"><b>Avatars</b></h1>
        @foreach($avatars as $avatar)
            <div class="py-3 row border-bottom">
                <div class="col">
                    <div class="row">
                        <div class="col-md-auto">
                            <img src="{{ asset('img/avatars/' . $avatar->image_path) }}" alt="{{ $avatar->item }}" class="img-avatar">
                        </div>
                        <div class="col align-self-center">
                            <h2>{{ $avatar->item }}</h2>
                            <p>Price: {{ $avatar->price }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto text-right">
                    <form action="{{ route('shop.buy', $avatar->shop_item_id) }}" method="POST">
                        @csrf
                        @if ($fis10user->avatar == $avatar->shop_item_id)
                            <button type="submit" class="btn btn-primary" disabled>Buy</button>
                            <p class="mt-2">You already own this item.</p>
                        @else
                            <button type="submit" class="btn btn-primary">Buy</button>
                        @endif
                    </form>
                    @if (auth()->user()->role == 'admin')
                        <a href="{{ route('shop.edit', $avatar->shop_item_id) }}" class="btn btn-primary mt-1">Edit</a>
                        <form class="mt-1" id="form_delete" action="{{ route('shop.destroy', $avatar->shop_item_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-start mt-3 mx-5">
        <a href="{{ route('shop.create') }}" class="btn btn-primary">Create</a>
    </div>


@endsection
