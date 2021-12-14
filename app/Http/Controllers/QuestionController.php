<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use App\Models\UsersQuestions;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $topic)
    {
        //Create User Soal Instance
        return view('question', [

            'topic' => Topic::where('topic_id', $topic)->first(),
            'question' => Question::where('question_id', $id)
                ->where('topic_id', $topic)->first(),

            'option' => Option_mcq::where('question_id', $id)
                ->get()

        ]);
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function answerQuestion($id, Request $request, $topic, $user)
    {

        $score = 0;
        
        $users = Fis10User::where('fis10_user_id',$user)->first();

        $question = Question::where('question_id', $id)
            ->where('topic_id', $topic)->first();

        $option_mcq = Option_mcq::where('question_id', $id)
            ->get();

        $option_fitb = Option_fitb::where('question_id', $id)
            ->get();

        $option_tof = Option_tof::where('question_id', $id)
            ->get();

        $request->validate([
            'choice' => 'required'
        ]);


        //Create User Soal Instance
        UsersQuestions::create([
           'question_id' => $question->question_id,
           'fis10_user_id' => $users->fis10_user_id,
           'answersoal' => null,
           'question_score' => $score,
           'time_start' => \Carbon\Carbon::now(),
           'time_end' => null
        ]);

        if ($question->question_type == "mcq") {
            foreach ($option_mcq as $o) {
                if ($request->choice == $o->option && $o->is_correct == true) {
                    $score++;
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id == 10) {
                        //Redirect ke result page
                        return redirect();
                    }
                } else if ($request->choice == $o->option && $o->is_correct == false) {
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id == 10) {
                        //Redirect ke result page
                        return redirect();
                    }
                }
            }
        } elseif ($question->question_type == "fitb") {
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $score++;
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id == 10) {
                        return redirect();
                    }
                } else {
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id == 10) {
                        return redirect();
                    }
                }
            }
        } elseif ($question->question_type == "tof") {
            foreach ($option_tof as $o) {
                if ($request->choice == $o->true_or_false) {
                    $score++;
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id == 10) {
                        return redirect();
                    }
                } else {
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id == 10) {
                        return redirect();
                    }
                }
            }
        }
    }
}
