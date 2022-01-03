<?php

namespace App\Http\Controllers\Api;

use App\Models\Fis10User;
use App\Models\User;
use App\Models\UsersQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();

        $history = DB::table('fis10_users_questions')
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
            ->selectRaw('fis10_topics.topic_name, CAST(sum(question_score) AS INTEGER) AS total_score')
            ->where('fis10_user_id', $fis10user->fis10_user_id)
            ->groupBy('fis10_topics.topic_name')
            ->get();

        return $history;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'birthyear' => $request->birthyear,
            'city' => $request->city,
            'school' => $request->school,
        ]);

        return ['message' => 'data has been updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}