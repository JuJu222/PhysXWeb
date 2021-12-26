<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use App\Models\fis10_users_questions;
use Illuminate\Support\Facades\File;

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
            'questions' => Question::paginate(10)
        ]);
    }


    public function showQuestion($topic, Request $request)
    {
        //Create User Soal Instance
        $score = 0;

        if (!$request->session()->has('nosoal')) {
            $request->session()->put('nosoal', 1);
        }

        $nosoal = $request->session()->get('nosoal');
        $questions = Question::where('topic_id', $topic)->get();

        if (count($questions) < $nosoal) {
            $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
            $fis10user->topics()->attach($topic + 1);
            return redirect('/')->with('completedsoal','You have completed the topic!');
        }

        $question = $questions[$nosoal - 1];

        if ($request->session()->get('click') == 1) {
            $request->session()->forget('click');
        }

        $users = Fis10User::where('user_id', auth()->user()->id)->first();

        if ($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->first() === null && !($request->has('choice'))) {
            $users->questions()->attach($question, array('answersoal' => null, 'question_score' => $score, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));
        }
        return view('question', [
            'topic' => Topic::where('topic_id', $topic)->first(),
            'question' => $question,
            'option' => Option_mcq::where('question_id', $question->question_id)
                ->get(),
        ]);
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
            $destinationPath = public_path('/img/questions');
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

        $question = Question::query()->findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);


            if ($question->image_path) {
                File::delete(public_path('/img/questions') . '/' . $question->image_path);
            }

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
        $question = Question::where('question_id', $id);
        File::delete(public_path('/img/uploads') . '/' . $question->image_path);
        $question->delete();
        return redirect('/admin/question')->with('success', 'You have deleted the question!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function answerQuestion($topic, Request $request)
    {
        if ($request->alert == 1) {
            $session = $request->session()->get('nosoal');
            $request->session()->put('nosoal', $session + 1);
            return back()->with(['click' => 1]);
        }

        $score = 0;

        $users = Fis10User::where('user_id', auth()->user()->id)->first();

        $nosoal = $request->session()->get('nosoal', 1);
        $questions = Question::where('topic_id', $topic)->get();
        $question = $questions[$nosoal - 1];

        $option_mcq = Option_mcq::where('question_id', $question->question_id)
            ->get();

        $option_fitb = Option_fitb::where('question_id', $question->question_id)
            ->get();

        $option_tof = Option_tof::where('question_id', $question->question_id)
            ->get();

        $request->validate([
            'choice' => 'required',

        ]);

        if ($question->question_type == "mcq") {
            foreach ($option_mcq as $o) {
                if ($request->choice == $o->option && $o->is_correct == true) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return back()->with('answerCorrect', 'You have answered the question correctly');
                } else if ($request->choice == $o->option && $o->is_correct == false) {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return back()->with('answerWrong', 'Your answer is wrong!');
                }
            }
        } elseif ($question->question_type == "fitb") {
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return back()->with('answerCorrect', 'You have answered the question correctly');
                } else {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);
                    return back()->with('answerWrong', 'Your answer is wrong!');
                }
            }
        } elseif ($question->question_type == "tof") {
            foreach ($option_tof as $o) {
                if ($request->choice == $o->true_or_false) {
                    $score = 1;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);

                    return back()->with('answerCorrect', 'You have answered the question correctly');
                } else {
                    $score = 0;
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $score, 'time_end' => \Carbon\Carbon::now()]);

                    return back()->with('answerWrong', 'Your answer is wrong!');
                }
            }
        }
    }
}
