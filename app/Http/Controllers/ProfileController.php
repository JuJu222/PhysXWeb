<?php

namespace App\Http\Controllers;

use App\Models\Fis10User;
use App\Models\User;
use App\Models\UsersQuestions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
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
            ->selectRaw('fis10_topics.topic_name, CAST(sum(question_score) AS INTEGER) AS total_score, fis10_topics.difficulty')
            ->where('fis10_user_id', $fis10user->fis10_user_id)
            ->groupBy('fis10_topics.topic_name')
            ->groupBy('fis10_topics.difficulty')
            ->get();

        return view('profile', compact('user', 'history'));
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
        $user = User::findOrFail($id);
        return view('profileedit', compact('user'));
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
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'school' => $request->school,
            'city' => $request->city,
            'birthyear' => $request->birthyear,
        ]);
        return redirect(route('profile.index'));
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
