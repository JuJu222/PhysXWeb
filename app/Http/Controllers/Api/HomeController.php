<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fis10User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $name = $fis10user->user->name;
        $unlockedTopics = $fis10user->topics;
        $totalScore = 0;
        $ranking = 0;

        $fis10UserQuestions = $fis10user->questions;
        foreach ($fis10UserQuestions as $fis10UserQuestion) {
            $totalScore += $fis10UserQuestion->pivot->question_score;
        }

        $response['name'] = $name;
        $response['unlocked_topics'] = $unlockedTopics;
        $response['total_score'] = $totalScore;
        $response['ranking'] = $ranking;

        return $response;
    }
}
