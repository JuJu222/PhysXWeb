<?php

namespace App\Http\Controllers;

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
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $titles = ShopItem::query()->where('type', 'title')->get();
        $avatars = ShopItem::query()->where('type', 'avatar')->get();

        return view('shop', compact('fis10user', 'titles', 'avatars'));
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

    /**
     * Buy the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buy($id)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $shopitem = ShopItem::query()->findOrFail($id);

        if ($shopitem->type == 'title') {
            $fis10user->update([
                'title' => $shopitem->shop_item_id,
                'coins' => $fis10user->coins - $shopitem->price
            ]);
        } else {
            $fis10user->update([
                'avatar' => $shopitem->shop_item_id,
                'coins' => $fis10user->coins - $shopitem->price
            ]);
        }

        return redirect(route('shop.index'));
    }
}
