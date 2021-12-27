<?php

namespace App\Http\Controllers;

use App\Models\Fis10User;
use App\Models\OwnedItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $unlockedTopics = $fis10user->topics;

        $avatar = null;
        $title = null;
        $onwedItems = $fis10user->shopItem;

        if ($onwedItems != null) {
            foreach ($onwedItems as $onwedItem) {
                if ($onwedItem->pivot->is_equipped) {
                    if ($onwedItem['type'] == 'title') {
                        $title = $onwedItem['item'];
                    } else {
                        $avatar = $onwedItem['image_path'];
                    }
                }
            }
        }

        return view('home', compact('unlockedTopics', 'title', 'avatar'));
    }
}
