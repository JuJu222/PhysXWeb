<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis10User;
use App\Models\UsersQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $name = $fis10user->user->name;
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

        $response['name'] = $name;
        $response['unlocked_topics'] = $unlockedTopics;
        $response['total_score'] = $totalScore;
        $response['ranking'] = $ranking;
        $response['coins'] = $coins;
        $response['title'] = $userTitle;
        $response['avatar'] = $userAvatar;

        return $response;
    }
}
