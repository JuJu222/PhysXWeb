@extends('layouts.apps')
@section('content')

    {{--<img src="https://wallpapercave.com/wp/fkIqItv.png">  --}}
    <div class="d-flex justify-content-center mt-5">
        <h1><b>Shop</b></h1>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <h4 class="purple"><b>Ubah gaya anda!</b></h4>
    </div>
    <div class="row d-flex flex-row align-items-center justify-content-center mt-4">
        <div class="col-md-auto">
            @isset ($userAvatar)
                <img src="{{ asset('img/avatars/' . $userAvatar) }}" class="avatar" alt="Avatar">
            @else
                <img src="https://drive.google.com/uc?export=view&id=1YW9i_gxGd2H66Rqa5YICNA2S30dUTeN-" class="avatar" alt="Avatar">
            @endisset
        </div>
        <div class="col-md-auto">
            @isset ($userTitle)
                <h2 class="purple font-weight-bold my-1">{{ $userTitle }}</h2>
            @else
                <h2 class="purple font-weight-bold my-1">Title Def</h2>
            @endisset
        </div>
    </div>
    <div class="result-coin mx-auto mt-3 px-3 py-2 d-flex align-items-center">
        <h5 class="result-score-total d-inline mb-0 mr-2">Saldo: {{ $coins }}</h5>
        <img src="{{ asset('img/coin.svg') }}" alt="Skor">
    </div>
    <div class="justify-content-start mt-3 mx-5">
        <h1 class="mb-3"><b>Titles</b></h1>
        @foreach($titles as $title)
            <div class="py-3 row border-bottom">
                <div class="col">
                    <h2 class="purple font-weight-bold">{{ $title->item }}</h2>
                    <div class="result-coin px-3 py-2 d-flex align-items-center">
                        <h5 class="result-score-total d-inline mb-0 mr-2">{{ $title->price }}</h5>
                        <img src="{{ asset('img/coin.svg') }}" alt="Skor">
                    </div>
                </div>
                <div class="col-md-auto text-right d-flex flex-column justify-content-center">
                        @csrf
                        <?php $owned = false ?>
                        <?php $equipped = false ?>
                        @foreach($ownedItems as $ownedItem)
                            @if ($ownedItem->shop_item_id == $title->shop_item_id)
                                <?php $owned = true ?>
                                @if ($ownedItem->pivot->is_equipped)
                                    <?php $equipped = true ?>
                                @endif
                            @endif
                        @endforeach
                        @if ($owned)
                            <form action="{{ route('shop.equip', $title->shop_item_id) }}" method="POST">
                                @csrf
                                @if($equipped)
                                    <button type="submit" class="btn btn-opaque rounded-circleX px-4" disabled>Equip</button>
                                @else
                                    <button type="submit" class="btn btn-opaque rounded-circleX px-4">Equip</button>
                                @endif
                            </form>
                        @else
                            <form action="{{ route('shop.buy', $title->shop_item_id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-opaque rounded-circleX px-4">Buy</button>
                            </form>
                        @endif
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
        <h1 class="mb-3"><b>Avatars</b></h1>
        @foreach($avatars as $avatar)
            <div class="py-3 row border-bottom">
                <div class="col">
                    <div class="row">
                        <img src="{{ $avatar->image_path }}" alt="{{ $avatar->item }}" class="img-avatar">
                        <div class="col align-self-center">
                            <h2 class="purple font-weight-bold">{{ $avatar->item }}</h2>
                            <div class="result-coin px-3 py-2 d-flex align-items-center">
                                <h5 class="result-score-total d-inline mb-0 mr-2">{{ $avatar->price }}</h5>
                                <img src="{{ asset('img/coin.svg') }}" alt="Skor">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto text-right d-flex flex-column justify-content-center">
                    @csrf
                    <?php $owned = false ?>
                    <?php $equipped = false ?>
                    @foreach($ownedItems as $ownedItem)
                        @if ($ownedItem->shop_item_id == $avatar->shop_item_id)
                            <?php $owned = true ?>
                            @if ($ownedItem->pivot->is_equipped)
                                <?php $equipped = true ?>
                            @endif
                        @endif
                    @endforeach
                    @if ($owned)
                        <form action="{{ route('shop.equip', $avatar->shop_item_id) }}" method="POST">
                            @csrf
                            @if($equipped)
                                <button type="submit" class="btn btn-opaque rounded-circleX px-4" disabled>Equip</button>
                            @else
                                <button type="submit" class="btn btn-opaque rounded-circleX px-4">Equip</button>
                            @endif
                            <p class="mt-2">You already own this item.</p>
                        </form>
                    @else
                        <form action="{{ route('shop.buy', $avatar->shop_item_id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-opaque rounded-circleX px-4">Buy</button>
                        </form>
                    @endif
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
    @if (auth()->user()->role == 'admin')
        <div class="d-flex justify-content-start mt-3 mx-5">
            <a href="{{ route('shop.create') }}" class="btn btn-primary">Create</a>
        </div>
    @endif
@endsection
