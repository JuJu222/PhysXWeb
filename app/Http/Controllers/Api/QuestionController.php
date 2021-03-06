<?php

namespace App\Http\Controllers\Api;

use App\Models\Log;
use App\Models\Topic;
use App\Models\Question;
use App\Models\Fis10User;
use App\Models\Option_mcq;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
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
     * @param  \App\Models\Question  $questionss
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
        $questions = Question::where('topic_id', $topic)->get();

        $temp = array();
        foreach ($questions as $q) {
            if ($q->question_type == 'mcq') {
                $optionMCQ = $q->optionMCQ()->get();
                //Make another column in json body
                $q['options'] = $optionMCQ;
                array_push($temp, $q);
            }

            if ($q->question_type == 'tof') {
                $optionTOF = $q->optionTOF()->get();
                $q['options'] = $optionTOF;
                array_push($temp, $q);
            }

            if ($q->question_type == 'fitb') {
                $optionFITB = $q->optionFITB()->get();
                $q['options'] = $optionFITB;
                array_push($temp, $q);
            }
        }

        return ['questions' => $temp];
    }

    public function showQuestion($topic, $question,Request $request)
    {
        $users = Fis10User::where('user_id', auth()->user()->id)->first();
        $questions = Question::where('topic_id', $topic)->where('question_id', $question)->first();

        if ($users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->first() === null) {
            $users->questions()->attach($questions, array('answersoal' => null, 'question_score' => 0, 'time_start' => \Carbon\Carbon::now(), 'time_end' => null));

            Log::query()->create([
                'user_id' => Auth::id(),
                'table' => 'fis10_users_questions',
                'path' => 'QuestionController@showQuestion',
                'action' => 'Attach Question ' . 'User: ' . Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                'url' => $request->fullUrl(),
                'ip_address' => $request->ip(),
            ]);
        }

    }

    public function answerQuestion($topic, $question, Request $request)
    {
        $users = Fis10User::where('user_id', auth()->user()->id)->first();
        $questions = Question::where('topic_id', $topic)->where('question_id', $question)->first();
        $option_mcq = Option_mcq::where('question_id', $question)
            ->get();

        $option_fitb = Option_fitb::where('question_id', $question)
            ->get();

        $option_tof = Option_tof::where('question_id', $question)
            ->get();
        $request->validate([
            'choice' => 'required',
        ]);

        if ($questions->question_type == "mcq") {
            foreach ($option_mcq as $o) {
                if ($request->choice == $o->option && $o->is_correct == 1) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $questions->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question MCQ Correct' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                } else if ($request->choice == $o->option && $o->is_correct == 0) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question MCQ Incorrect' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                }
            }
        } elseif ($questions->question_type == "fitb") {
            foreach ($option_fitb as $o) {
                if ($request->choice == $o->answer) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $questions->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question FITB Correct' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                } else {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question FITB Incorrect' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                }
            }
        } elseif ($questions->question_type == "tof") {
            foreach ($option_tof as $o) {
                if ($request->choice == "True" && $o->true_or_false == 1) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $questions->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Correct' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                } else if ($request->choice == "True" && $o->true_or_false == 0) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Incorrect' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                } else if ($request->choice == "False" && $o->true_or_false == 0) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => $questions->score, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Correct' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                } else if ($request->choice == "False" && $o->true_or_false == 1) {
                    $users->questions()->where('fis10_users_questions.question_id', $questions->question_id)->where('fis10_users_questions.fis10_user_id', auth()->user()->id)->update(['answersoal' => $request->choice, 'question_score' => 0, 'time_end' => \Carbon\Carbon::now()]);
                    Log::query()->create([
                        'user_id' => Auth::id(),
                        'table' => 'fis10_users_questions',
                        'path' => 'QuestionController@answerQuestion',
                        'action' => 'Answer Question TOF Incorrect' .'User: '. Auth::id() . ' Question: ' . $users->questions()->where('fis10_users_questions.question_id', $question->question_id)->latest()->first()->question_id,
                        'url' => $request->fullUrl(),
                        'ip_address' => $request->ip(),
                    ]);
                }
            }
        }
    }

    public function clearUsersQuestionsTopic($topic)
    {
        $users = Fis10User::where('user_id', auth()->user()->id)->first();
        $usersQuestionsTopicIds = $users->questions()->where('topic_id', $topic)->pluck('fis10_questions.question_id')->toArray();
        $users->questions()->detach($usersQuestionsTopicIds);

        return ['message' => 'Clear users questions topic successful'];
    }

    public function result($topic)
    {
        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();

        $userQuestions = $fis10user->questions->where('topic_id', $topic);
        $result = array();
        $topic_name = Topic::query()->findOrFail($topic)->topic_name;
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

        $fis10user->update(['coins' => $fis10user->coins + 25]);

        $result['topic_name'] = $topic_name;
        $result['accuracy'] = $accuracy;
        $result['total_score'] = $totalScore;
        $result['total_questions'] = $totalQuestions;
        $result['total_correct'] = $correctAnswerCounter;
        $result['total_minutes'] = $totalMinutes;
        $result['total_seconds'] = $totalSeconds;

        return $result;
    }
}
