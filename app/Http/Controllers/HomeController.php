<?php

namespace App\Http\Controllers;

use App\Models\Fis10User;
use App\Models\OwnedItem;
use App\Models\UsersQuestions;
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

        $userTitle = null;
        $userAvatar = null;
        $onwedItems = $fis10user->shopItem;
        $coins = $fis10user->coins;

        $rankings = UsersQuestions::selectRaw("CAST(SUM(question_score) AS INTEGER) AS total_score, fis10_user_id")
            ->groupBy('fis10_user_id')
            ->orderByDesc('total_score')
            ->get();

        $totalScore = '0';
        $ranking = '-';
        foreach ($rankings as $index=>$item) {
            if ($item->fis10_user_id == $fis10user->fis10_user_id) {
                $totalScore = $item->total_score;
                $ranking = $index + 1;
            }
        }

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

        return view('home', compact('unlockedTopics', 'userTitle', 'userAvatar', 'totalScore', 'ranking', 'coins'));
    }
}
