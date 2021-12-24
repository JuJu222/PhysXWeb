<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\Option_mcqResource;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function question($topic, $id, Request $request)
    {
        $score = 0;
        $question = Question::all()->where('topic_id', $topic)->where('question_id', $id);
        $users = Fis10User::where('user_id', auth()->user()->id)->first();

        if ($question->question_type == "mcq") {
            $option = Option_mcq::all()->where('question_id', $id);
            if ($users->questions()->where('fis10_users_questions.question_id', $id)->first() === null && !($request->has('choice'))) {
                $users->questions()->attach($question, array('answersoal' => null, 'question_score' => $score, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));
            }
            return ['questions' => QuestionResource::collection($question), 'options' => Option_mcqResource::collection($option)];
        } else if ($question->question_type == "fitb") {
            if ($users->questions()->where('fis10_users_questions.question_id', $id)->first() === null && !($request->has('choice'))) {
                $users->questions()->attach($question, array('answersoal' => null, 'question_score' => $score, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));
            }
            return ['questions' => QuestionResource::collection($question)];
        } else if ($question->question_type == "tof") {
            if ($users->questions()->where('fis10_users_questions.question_id', $id)->first() === null && !($request->has('choice'))) {
                $users->questions()->attach($question, array('answersoal' => null, 'question_score' => $score, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));
            }
            return ['questions' => QuestionResource::collection($question)];
        } else {
            return ['message' => 'No question with that question type'];
        }
    }

    public function answer($topic, $id, Request $request)
    {

        $users = Fis10User::where('user_id', auth()->user()->id)->first();

        $question = Question::where('question_id', $id)
            ->where('topic_id', $topic)->first();
        $option_mcq = Option_mcq::where('question_id', $id)
            ->get();

        $option_fitb = Option_fitb::where('question_id', $id)
            ->get();

        $option_tof = Option_tof::where('question_id', $id)
            ->get();

        $this->validate($request, [
            'choice' => 'required'
        ]);

        if ($question->question_type == "mcq") {
            foreach ($option_mcq as $o) {
                if ($request->choice == $o->option && $o->is_correct == true) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered correctly!'];
                } else if ($request->choice == $o->option && $o->is_correct == false) {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered wrong!'];
                }
            }
        } elseif ($question->question_type == "fitb") {
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered correctly!'];
                } else {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered wrong!'];
                }
            }
        } elseif ($question->question_type == "tof") {
            foreach ($option_tof as $o) {
                if ($request->choice == $o->true_or_false) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered correctly!'];
                } else {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return ['message' => 'You have answered wrong!'];
                }
            }
        }
    }
}
