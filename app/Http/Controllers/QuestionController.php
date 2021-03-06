<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Topic;
use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\fis10_users_questions;
use Illuminate\Support\Facades\Route;

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
            'questions' => Question::simplePaginate(10)
        ]);
    }


    public function showQuestion($topic, Request $request)
    {
        //Create User Soal Instance
        $score = 0;
        $users = Fis10User::where('user_id', auth()->user()->id)->first();

        $unlockedTopic = $users->topics->where('topic_id', $topic)->first();

        if ($unlockedTopic == null && $topic != 1) {
            return redirect()->route('home');
        }

        if (!$request->session()->has('nosoal')) {
            $request->session()->put('nosoal', 1);
            $request->session()->put('topic', $topic);
            $usersQuestionsTopicIds = $users->questions()->where('topic_id', $topic)->pluck('fis10_questions.question_id')->toArray();
            $users->questions()->detach($usersQuestionsTopicIds);
        }

        if ($request->session()->get('topic') != $topic) {
            return redirect()->route('questionSoal', $request->session()->get('topic'));
        }

        $nosoal = $request->session()->get('nosoal');

        $questions = Question::where('topic_id', $topic)->get();

        if (count($questions) < $nosoal) {
            return redirect()->route('questions.result', $topic);
        }

        $question = $questions[$nosoal - 1];


        if ($request->session()->get('click') == 1) {
            $request->session()->forget('click');
        }

        if (!$request->session()->has('answerWrong') && (($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.question_score', '=', 0)->first()) != null)) {
            return back()->with('answerWrong', 'Jawaban anda Salah!');
        } else if (!$request->session()->has('answerCorrect') && (($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.question_score', '>', 0)->first()) != null)) {
            return back()->with('answerCorrect', 'Jawaban anda Betul!');
        }


        if ($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->first() === null && !($request->has('choice'))) {

            $users->questions()->attach($question, array('answersoal' => null, 'question_score' => $score, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));


            Log::query()->create([
                'user_id' => Auth::id(),
                'table' => 'fis10_users_questions',
                'path' => 'QuestionController@showQuestion',
                'action' => 'Attach Question ' . 'User: ' . Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
            ]);
        }


        return view('question', [
            'topic' => Topic::where('topic_id', $topic)->first(),
            'questions' => $questions,
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
                'question_type' => $request->type,
                'score' => $request->score,
                'question' => $request->question,
                'image_path' => $name,
                'score' => $request->score,
                'topic_id' => $request->topic,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);


        } else {
            Question::create([
                'question_type' => $request->type,
                'score' => $request->score,
                'question' => $request->question,
                'score' => $request->score,
                'topic_id' => $request->topic,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_questions',
            'path' => 'QuestionController@store',
            'action' => 'Create Question ' . Question::query()->latest()->first()->question_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect('/question')->with('createdQuestion', 'You have successfully created a new Question');
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
                'question_type' => $request->type,
                'question' => $request->question,
                'score' => $request->score,
                'image_path' => $name,
                'topic_id' => $request->topic,
                'updated_at' => \Carbon\Carbon::now()
            ]);


        } else {
            Question::where('question_id', $id)->update([
                'question_type' => $request->type,
                'question' => $request->question,
                'score' => $request->score,
                'topic_id' => $request->topic,
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_questions',
            'path' => 'QuestionController@update',
            'action' => 'Edit Question ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect('/question')->with('updatedQuestion', 'You have successfully updated the Question');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $question = Question::where('question_id', $id)->first();
        File::delete(public_path('/img/questions') . '/' . $question->image_path);
        $question->delete();
        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_questions',
            'path' => 'QuestionController@destroy',
            'action' => 'Delete Question ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);
        return redirect('/question')->with('success', 'You have deleted the question!');
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
        //Bikin jadi index
        $question = $questions[$nosoal - 1];

        $topic = Topic::where('topic_id', $topic)->first();
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
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $question->score, 'time_end' => \Carbon\Carbon::now()]);


                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question MCQ Correct ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerCorrect', 'Jawaban anda betul!');
                } else if ($request->choice == $o->option && $o->is_correct == false) {
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question MCQ Incorrect ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerWrong', 'Jawaban anda salah!');
                }
            }
        } elseif ($question->question_type == "fitb") {
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $question->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question FITB Correct ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerCorrect', 'Jawaban anda betul!');
                } else {
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question FITB Incorrect ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerWrong', 'Jawaban anda salah!');
                }
            }
        } elseif ($question->question_type == "tof") {
            foreach ($option_tof as $o) {
                if ($request->choice == $o->true_or_false) {
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $question->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Correct ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerCorrect', 'Jawaban anda betul!');
                } else {
                    $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Incorrect ' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
//                    return back()->with('answerWrong', 'Jawaban anda salah!');
                }
            }
        }

        if (($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.question_score', '>', 0)->first()) != null) {
            return back()->with('answerCorrect', 'Jawaban anda Betul!');
        } else if (($users->questions()->where('fis10_users_questions.question_id', $question->question_id)->where('fis10_users_questions.question_score', '=', 0)->first()) != null) {
            return back()->with('answerWrong', 'Jawaban anda Salah!');
        }
    }

    public function result($topic, Request $request)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();

        $userQuestions = $fis10user->questions->where('topic_id', $topic);
        $result = array();
        $correctAnswerCounter = 0;
        $timeTaken = 0;
        $totalScore = 0;
        $totalSeconds = 0;

        foreach ($userQuestions as $userQuestion) {
            if (!$userQuestion->pivot->question_score == 0) {
                $totalScore += $userQuestion->pivot->question_score;
                $correctAnswerCounter++;
            }
            $time_start = \Carbon\Carbon::parse($userQuestion->pivot->time_start);
            $time_end = \Carbon\Carbon::parse($userQuestion->pivot->time_end);
            $timeTaken += $time_start->diffInSeconds($time_end, false);
        }

        $totalMinutes = floor($timeTaken / 60);
        $totalSeconds += $timeTaken % 60;
        $totalQuestions = Question::query()->where('topic_id', $topic)->count();
        $accuracy = round($correctAnswerCounter / $totalQuestions * 100, 0);

        if ($accuracy >= 60) {
            $topicObj = Topic::query()->findOrFail($topic);
            if ($topicObj->difficulty == 'easy') {
                $fis10user->topics()->syncWithoutDetaching($topic + 10);
            } else {
                if ($topic != 20) {
                    $fis10user->topics()->syncWithoutDetaching($topic - 9);
                }
            }
        }

        $request->session()->forget('nosoal');
        $request->session()->forget('topic');
        $fis10user->update(['coins' => $fis10user->coins + 25]);

        $result['accuracy'] = $accuracy;
        $result['total_score'] = $totalScore;
        $result['total_questions'] = $totalQuestions;
        $result['total_correct'] = $correctAnswerCounter;
        $result['total_minutes'] = $totalMinutes;
        $result['total_seconds'] = $totalSeconds;

        return view('result', compact('result', 'topic'));
    }
}
