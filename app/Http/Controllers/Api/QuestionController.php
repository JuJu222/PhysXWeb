<?php

namespace App\Http\Controllers\Api;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\QuestionResource;
use App\Http\Resources\Option_mcqResource;
use App\Http\Resources\Option_tofResource;
use App\Http\Resources\Option_fitbResource;

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

    public function question($topic)
    {
        $questions = Question::where('topic_id',$topic)->get();

        $temp = array();
        foreach($questions as $q){
            if($q->question_type == 'mcq'){
                $optionMCQ = $q->optionMCQ()->get();
                $q['options'] = $optionMCQ;
                array_push($temp, $q);
            }

            if($q->question_type == 'tof'){
                $optionTOF = $q->optionTOF()->get();
                $q['options'] = $optionTOF;
                array_push($temp, $q);
            }

            if($q->question_type == 'fitb'){
                $optionFITB = $q->optionFITB()->get();
                $q['options'] = $optionFITB;
                array_push($temp, $q);
            }
        }

        return ['questions' => $temp];
    }

    // public function answer($topic, $id, Request $request)
    // {

    //     $users = Fis10User::where('user_id', auth()->user()->id)->first();

    //     $question = Question::where('question_id', $id)
    //         ->where('topic_id', $topic)->first();
    //     $option_mcq = Option_mcq::where('question_id', $id)
    //         ->get();

    //     $option_fitb = Option_fitb::where('question_id', $id)
    //         ->get();

    //     $option_tof = Option_tof::where('question_id', $id)
    //         ->get();

    //     $this->validate($request, [
    //         'choice' => 'required'
    //     ]);

    //     if ($question->question_type == "mcq") {
    //         foreach ($option_mcq as $o) {
    //             if ($request->choice == $o->option && $o->is_correct == true) {
    //                 $score = 1;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered correctly!'];
    //             } else if ($request->choice == $o->option && $o->is_correct == false) {
    //                 $score = 0;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered wrong!'];
    //             }
    //         }
    //     } elseif ($question->question_type == "fitb") {
    //         foreach ($option_fitb as $o) {
    //             if ($request->choice == $o->answer) {
    //                 $score = 1;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered correctly!'];
    //             } else {
    //                 $score = 0;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered wrong!'];
    //             }
    //         }
    //     } elseif ($question->question_type == "tof") {
    //         foreach ($option_tof as $o) {
    //             if ($request->choice == $o->true_or_false) {
    //                 $score = 1;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered correctly!'];
    //             } else {
    //                 $score = 0;
    //                 $users->questions()->where('fis10_users_questions.question_id', $id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
    //                 return ['message' => 'You have answered wrong!'];
    //             }
    //         }
    //     }
    }

