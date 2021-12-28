@extends('layouts.apps')
@section('content')

    {{--<img src="https://wallpapercave.com/wp/fkIqItv.png">  --}}
    <div class="home_content">
        <div class="d-flex justify-content-center mt-5">
            <h1 class="purple"><b>Shop</b></h1>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <h4><b>Edit item shop</b></h4>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <form method="POST" action="{{ route('shop.update', $shopItem->shop_item_id) }}" class="form-shop" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label for="item">Item</label>
                    <input id="item" type="text" class="form-control" name="item" required placeholder="Masukkan Item" value="{{ $shopItem->item }}">
                </div>
                <div class="form-group">
                    <label for="type">Type</label>
                    <select name="type" id="select-type" class="form-control form-select" required>
                    @if ($shopItem->type == "title")
                            <option value="title" selected>Title</option>
                            <option value="avatar">Avatar</option>
                        @else
                            <option value="title">Title</option>
                            <option value="avatar" selected>Avatar</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Harga</label>
                    <input id="price" type="number" class="form-control" name="price" required placeholder="Masukkan Harga" value="{{ $shopItem->price }}">
                </div>
                <div class="form-group">
                    <label for="image">Image (Avatar)</label>
                    <input type="file" name="image" id="input-image" class="form-control">
                </div>
                <div class="form-group">
                    <div class="d-flex col-md-12 justify-content-center align-items-center mt-3">
                        <button type="submit" class="btn btn-opaque rounded-circleX px-5"><b>Ubah</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        let selectTypeInit = $("#select-type");

        if (selectTypeInit.val() === 'title') {
            $("#input-image").attr("disabled", "disabled");
        } else {
            $("#input-image").removeAttr("disabled");
        }

        selectTypeInit.change(function() {
            if ($(this).val() === 'title') {
                $("#input-image").attr("disabled", "disabled");
            } else {
                $("#input-image").removeAttr("disabled");
            }
        });
    </script>
@endsection
