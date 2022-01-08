<?php

namespace App\Http\Controllers;

use App\Models\Fis10User;
use App\Models\Log;
use App\Models\OwnedItem;
use App\Models\ShopItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ShopItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $titles = ShopItem::query()->where('type', 'title')->get();
        $avatars = ShopItem::query()->where('type', 'avatar')->get();
        $ownedItems = $fis10user->shopItem;

        $userTitle = null;
        $userAvatar = null;
        $onwedItems = $fis10user->shopItem;
        $coins = $fis10user->coins;

        if ($onwedItems != null) {
            foreach ($onwedItems as $onwedItem) {
                if ($onwedItem->pivot->is_equipped) {
                    if ($onwedItem['type'] == 'title') {
                        $userTitle = $onwedItem['item'];
                    } else {
                        $userAvatar = $onwedItem['image_path'];
                    }
                }
            }
        }

        return view('shop', compact('fis10user', 'titles', 'avatars', 'ownedItems', 'userAvatar', 'userTitle', 'coins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/avatars');
            $image->move($destinationPath, $name);

            ShopItem::create([
                'item' => $request->item,
                'type' => $request->type,
                'price' => $request->price,
                'image_path' => $name
            ]);
        } else {
            ShopItem::create([
                'item' => $request->item,
                'type' => $request->type,
                'price' => $request->price,
            ]);
        }

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_shop_items',
            'path' => 'ShopItemController@store',
            'action' => 'Create shop item ' . ShopItem::query()->latest()->first()->shop_item_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect(route('shop.index'));
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
        $shopItem = ShopItem::query()->findOrFail($id);

        return view('shop_edit', compact('shopItem'));
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
        $shopItem = ShopItem::query()->findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/img/avatars');
            $image->move($destinationPath, $name);

            if ($shopItem->image_path) {
                File::delete(public_path('/img/avatars') . '/' . $shopItem->image_path);
            }

            $shopItem->update([
                'item' => $request->item,
                'type' => $request->type,
                'price' => $request->price,
                'image_path' => $name
            ]);
        } else {
            $shopItem->update([
                'item' => $request->item,
                'type' => $request->type,
                'price' => $request->price,
            ]);
        }

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_shop_items',
            'path' => 'ShopItemController@update',
            'action' => 'Update shop item ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect(route('shop.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $shopItem = ShopItem::findOrFail($id);

        File::delete(public_path('/img/avatars') . '/' . $shopItem->image_path);
        $shopItem->delete();

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_shop_items',
            'path' => 'ShopItemController@destroy',
            'action' => 'Delete shop item ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect(route('shop.index'));
    }

    /**
     * Buy the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buy($id, Request $request)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
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
                $fis10user->update(['coins' => $fis10user->coins - $shopItem->price]);

                Log::query()->create([
                   'user_id' => Auth::id(),
                   'table' => 'fis10_owned_items',
                   'path' => 'ShopItemController@buy',
                   'action' => 'Buy shop item ' . $shopItem->shop_item_id,
                   'url' => $request->fullUrl(),
                   'ip_address' => $request->ip(),
                ]);
            }
        }

        return redirect(route('shop.index'));
    }

    public function equip($id, Request $request)
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

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_owned_items',
            'path' => 'ShopItemController@equip',
            'action' => 'Equip shop item ' . $shopItem->shop_item_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect(route('shop.index'));
    }
}
