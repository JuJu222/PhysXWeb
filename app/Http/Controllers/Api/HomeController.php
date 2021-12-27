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
        $unlockedTopics = $fis10user->topics;

        return $unlockedTopics;
    }
}
