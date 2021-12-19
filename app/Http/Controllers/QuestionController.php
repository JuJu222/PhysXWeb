<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use Illuminate\Support\Facades\Route;
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
    public function index()
    {
        return view('question_index', [
            'questions' => Question::paginate(5)
        ]);
    }


    public function showQuestion($topic, $id, Request $request)
    {
        //Create User Soal Instance
        $soalNumber = 1;
        $request->session()->put('nosoal', 0);

        if ($request->session()->exists('nosoal')) {
            $request->session()->put('nosoal', $id);
            $session = $request->session()->get('nosoal');
            if (Route::is('questionSoal')) {
                return view('question', [
                    'topic' => Topic::where('topic_id', $topic)->first(),
                    'question' => Question::where('question_id', $session)
                        ->where('topic_id', $topic)->first(),
                    'option' => Option_mcq::where('question_id', $session)
                        ->get(),
                ]);
            }
        } else {
            $request->session()->increment('nosoal', $incrementBy = 1);
            $session = $request->session()->get('nosoal');
            if (Route::is('questionSoal')) {
                return view('question', [
                    'topic' => Topic::where('topic_id', $topic)->first(),
                    'question' => Question::where('question_id', $session)
                        ->where('topic_id', $topic)->first(),
                    'option' => Option_mcq::where('question_id', $session)
                        ->get(),
                ]);
            }
        }
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question_create', [
            'topics' => Topic::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

            Question::create([
                'question_id' => $request->number,
                'question_type' => $request->type,
                'question' => $request->question,
                'image_path' => $name,
                'topic_id' => $request->topic,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        } else {
            Question::create([
                'question_id' => $request->number,
                'question_type' => $request->type,
                'question' => $request->question,
                'topic_id' => $request->topic,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        return redirect('/admin/question')->with('createdQuestion', 'You have successfully created a new Question');
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
        return view('question_edit', [
            'topics' => Topic::all(),
            'questions' => Question::where('question_id', $id)->first()
        ]);
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
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);

            Question::where('question_id', $id)->update([
                'question_id' => $request->number,
                'question_type' => $request->type,
                'question' => $request->question,
                'image_path' => $name,
                'topic_id' => $request->topic,
                'updated_at' => \Carbon\Carbon::now()
            ]);
        } else {
            Question::where('question_id', $id)->update([
                'question_id' => $request->number,
                'question_type' => $request->type,
                'question' => $request->question,
                'topic_id' => $request->topic,
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        return redirect('/admin/question')->with('updatedQuestion', 'You have successfully updated the Question');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('question_id', $id)->delete();
        return redirect('/admin/question')->with('success', 'You have deleted the question!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function answerQuestion($topic, $id, Request $request)
    {

        $score = 0;

        $users = Fis10User::where('fis10_user_id', auth()->user()->id)->first();

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

        if ($question->question_type == "mcq") {
            UsersQuestions::create([
                'question_id' => $question->question_id,
                'fis10_user_id' => $users->fis10_user_id,
                'answersoal' => null,
                'question_score' => $score,
                'time_start' => \Carbon\Carbon::now(),
                'time_end' => null
            ]);
            foreach ($option_mcq as $o) {
                if ($request->choice == $o->option && $o->is_correct == true) {
                    $score = 0;
                    $score++;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'question_score' => $score,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id % 10 == 0) {
                        //Redirect ke result page
                        return redirect();
                    }
                } else if ($request->choice == $o->option && $o->is_correct == false) {
                    $score = 0;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id % 10 == 0) {
                        //Redirect ke result page
                        return redirect();
                    }
                }
            }
        } elseif ($question->question_type == "fitb") {
            UsersQuestions::create([
                'question_id' => $question->question_id,
                'fis10_user_id' => $users->fis10_user_id,
                'answersoal' => null,
                'question_score' => $score,
                'time_start' => \Carbon\Carbon::now(),
                'time_end' => null
            ]);
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $score = 0;
                    $score++;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'question_score' => $score,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id % 10 == 0) {
                        return redirect();
                    }
                } else {
                    $score = 0;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id % 10 == 0) {
                        return redirect();
                    }
                }
            }
        } elseif ($question->question_type == "tof") {
            UsersQuestions::create([
                'question_id' => $question->question_id,
                'fis10_user_id' => $users->fis10_user_id,
                'answersoal' => null,
                'question_score' => $score,
                'time_start' => \Carbon\Carbon::now(),
                'time_end' => null
            ]);
            foreach ($option_tof as $o) {
                if ($request->choice == $o->true_or_false) {
                    $score = 0;
                    $score++;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'question_score' => $score,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerCorrect', 'You have answered the question correctly!');
                    if ($question->question_id % 10 == 0) {
                        return redirect();
                    }
                } else {
                    $score = 0;
                    UsersQuestions::where('question_id', $id)
                        ->where('fis10_user_id', auth()->user()->id)
                        ->update([
                            'answersoal' => $request->choice,
                            'time_end' => \Carbon\Carbon::now()
                        ]);
                    return back()->with('answerWrong', 'Your answer is wrong!');
                    if ($question->question_id % 10 == 0) {
                        return redirect();
                    }
                }
            }
        }
    }
}
