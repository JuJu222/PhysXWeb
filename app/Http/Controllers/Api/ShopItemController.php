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
    public function index(Request $request)
    {
        $shopItems = ShopItem::all();
        $fis10user = Fis10User::query()->where('user_id', $request->user()->id)->first();
        $ownedItems = $fis10user->shopItem;
        $coins = $fis10user->coins;
        $title = null;
        $avatar = null;

        if ($ownedItems != null) {
            foreach ($ownedItems as $onwedItem) {
                if ($onwedItem->pivot->is_equipped) {
                    if ($onwedItem['type'] == 'title') {
                        $title = $onwedItem['item'];
                    } else {
                        $avatar = $onwedItem['image_path'];
                    }
                }
            }
        }

        return [
            'shop_items' => ShopItemResource::collection($shopItems),
            'owned_items' => $ownedItems,
            'coins' => $coins,
            'title' => $title,
            'avatar' => $avatar
        ];
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

    public function buy(Request $request, $id)
    {
        $fis10user = Fis10User::query()->where('user_id', $request->user()->id)->first();
        $shopItem = ShopItem::query()->findOrFail($id);

        if ($fis10user->coins >= $shopItem->price) {
            if (!$fis10user->shopItem->contains($shopItem)) {
                if ($shopItem->type == 'title') {
                    foreach ($fis10user->shopItem as $item) {
                        if ($item->type == 'title' && $item->pivot->is_equipped == true) {
                            $item->pivot->update([
                                'is_equipped' => false
                            ]);
                        }
                    }
                } else {
                    foreach ($fis10user->shopItem as $item) {
                        if ($item->type == 'avatar' && $item->pivot->is_equipped == true) {
                            $item->pivot->update([
                                'is_equipped' => false
                            ]);
                        }
                    }
                }
                $shopItem->fis10User()->attach($fis10user->fis10_user_id, ['is_equipped' => true]);
            }

            return response()->json([
                'message' => 'Buy shop item successful',
                'ownedItem' => $shopItem->fis10User
            ]);
        }

        return response()->json([
            'message' => 'Not enough coins!'
        ]);
    }

    public function equip($id)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $shopItem = ShopItem::query()->findOrFail($id);

        if (!$shopItem->fis10User()->findOrFail($fis10user->fis10_user_id)->pivot->is_equiped) {
            if ($shopItem->type == 'title') {
                foreach ($fis10user->shopItem as $item) {
                    if ($item->type == 'title' && $item->pivot->is_equipped == true) {
                        $item->pivot->update([
                            'is_equipped' => false
                        ]);
                    }
                }
            } else {
                foreach ($fis10user->shopItem as $item) {
                    if ($item->type == 'avatar' && $item->pivot->is_equipped == true) {
                        $item->pivot->update([
                            'is_equipped' => false
                        ]);
                    }
                }
            }

            $shopItem->fis10User()->findOrFail($fis10user->fis10_user_id)->pivot->update([
                'is_equipped' => true
            ]);
        }

        return response()->json([
            'message' => 'Equip item successful',
            'ownedItem' => $shopItem->fis10User
        ]);
    }
}
