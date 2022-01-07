<?php

namespace App\Http\Controllers;
use App\Models\UsersQuestions;
use App\Models\Fis10User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use App\Models\Log;
class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $leaderboard = DB::table('fis10_users_questions')
            ->join(
                'fis10_users',
                'fis10_users.fis10_user_id',
                '=',
                'fis10_users_questions.fis10_user_id')
            ->join(
                'users',
                'users.id',
                '=',
                'fis10_users.user_id')
            ->selectRaw('fis10_users_questions.fis10_user_id, name, CAST(SUM(question_score) AS INTEGER) AS total_score')
            ->groupBy('fis10_users_questions.fis10_user_id')
            ->groupBy('name')
            ->orderByDesc('total_score')
            ->limit(10)
            ->get();

            foreach ($leaderboard as $item) {
                $fis10user = Fis10User::query()->where('user_id', $item->fis10_user_id)->first();
                $ownedItems = $fis10user->shopItem;
                $title = null;
                $avatar = null;

                if ($ownedItems != null) {
                    foreach ($ownedItems as $ownedItem) {
                        if ($ownedItem->pivot->is_equipped) {
                            if ($ownedItem['type'] == 'title') {
                                $title = $ownedItem['item'];
                            } else {
                                $avatar = $ownedItem['image_path'];
                            }
                        }
                    }
                }

                $item->title = $title;
                $item->avatar = $avatar;
            }
            
            Log::query()->create([
                'user_id' => Auth::id(),
                'table' => 'fis10_user_questions',
                'path' => 'LeaderboardController@show',
                'action' => 'Show leaderboard',
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
            ]);

            return view('leaderboards' ,compact('leaderboard'));
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
    public function show($id, Request $request)
    {
        $topic = Topic::where('topic_id', $id)->first();
        $leaderboard = DB::table('fis10_users_questions')
            ->join(
                'fis10_users',
                'fis10_users.fis10_user_id',
                '=',
                'fis10_users_questions.fis10_user_id')
            ->join(
                'users',
                'users.id',
                '=',
                'fis10_users.user_id')
            ->join(
                'fis10_questions',
                'fis10_questions.question_id',
                '=',
                'fis10_users_questions.question_id')
            ->join(
                'fis10_topics',
                'fis10_topics.topic_id',
                '=',
                'fis10_questions.topic_id')
            ->selectRaw('fis10_users_questions.fis10_user_id, name, CAST(SUM(question_score) AS INTEGER) AS total_score')
            ->where('fis10_topics.topic_id', $id)
            ->groupBy('fis10_users_questions.fis10_user_id')
            ->groupBy('name')
            ->orderByDesc('total_score')
            ->limit(10)
            ->get();

            foreach ($leaderboard as $item) {
                $fis10user = Fis10User::query()->where('user_id', $item->fis10_user_id)->first();
                $ownedItems = $fis10user->shopItem;
                $title = null;
                $avatar = null;

                if ($ownedItems != null) {
                    foreach ($ownedItems as $ownedItem) {
                        if ($ownedItem->pivot->is_equipped) {
                            if ($ownedItem['type'] == 'title') {
                                $title = $ownedItem['item'];
                            } else {
                                $avatar = $ownedItem['image_path'];
                            }
                        }
                    }
                }

                $item->title = $title;
                $item->avatar = $avatar;
            }
            
            Log::query()->create([
                'user_id' => Auth::id(),
                'table' => 'fis10_user_questions',
                'path' => 'LeaderboardController@show',
                'action' => 'Show' . $topic->topic_name .' leaderboard ' ,
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
            ]);

            return view('leaderboards', compact('leaderboard','topic'));
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
}
