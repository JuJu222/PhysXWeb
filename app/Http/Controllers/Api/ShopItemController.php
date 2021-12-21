<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShopItemResource;
use App\Models\Fis10User;
use App\Models\ShopItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shopItems = ShopItem::all();
        return ['shop_items' => ShopItemResource::collection($shopItems)];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function buy($id)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $shopItem = ShopItem::query()->findOrFail($id);

        if ($shopItem->type == 'title') {
            $fis10user->update([
                'title' => $shopItem->shop_item_id,
                'coins' => $fis10user->coins - $shopItem->price
            ]);
        } else {
            $fis10user->update([
                'avatar' => $shopItem->shop_item_id,
                'coins' => $fis10user->coins - $shopItem->price
            ]);
        }

        return redirect(route('shop.index'));
    }
}
