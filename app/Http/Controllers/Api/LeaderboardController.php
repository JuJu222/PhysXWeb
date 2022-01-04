<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\UsersQuestions;
use App\Models\Fis10User;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $leaderboard = UsersQuestions::selectRaw("CAST(SUM(question_score) AS INTEGER) AS total_score, fis10_user_id")
        // ->groupBy('fis10_user_id')
        // ->orderByDesc('total_score')
        // ->get();

        $leaderboard = DB::table('fis10_users_questions')
            ->join(
                'fis10_users',
                'fis10_users.fis10_user_id',
                '=',
                'fis10_users_questions.question_id')
            ->join(
                'users',
                'users.id',
                '=',
                'fis10_users.user_id')
            ->selectRaw('name, CAST(SUM(question_score) AS INTEGER) AS total_score')
            ->groupBy('name')
            ->orderByDesc('total_score')
            ->limit(10)
            ->get();

            return ['leaderboard' => $leaderboard];
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
        $leaderboard = DB::table('fis10_users_questions')
            ->join(
                'fis10_users',
                'fis10_users.fis10_user_id',
                '=',
                'fis10_users_questions.question_id')
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
            ->selectRaw('name, CAST(SUM(question_score) AS INTEGER) AS total_score')
            ->where('fis10_topics.topic_id', $id)
            ->groupBy('name')
            ->orderByDesc('total_score')
            ->limit(10)
            ->get();

        return ['leaderboard' => $leaderboard];
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
