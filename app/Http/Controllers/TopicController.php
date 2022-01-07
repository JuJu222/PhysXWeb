<?php

namespace App\Http\Controllers;

use App\Models\Fis10User;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
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
    public function show($id, Request $request)
    {
        //
        $topic = Topic::where('topic_id', $id)->first();

        $topiceasy = Topic::where('difficulty','easy')->get();
        $topichard = Topic::where('difficulty','hard')->get();

        $topicsEasy = $topiceasy[$id - 1]->topic_id;
        $topicsHard = $topichard[$id - 1]->topic_id;

        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $unlockedTopics = $fis10user->topics;

        $request->session()->forget('nosoal');
        $request->session()->forget('topic');

        switch($id){
            case 1:
                return view('besarandansatuan', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 2:
                $unlockedTopic = $fis10user->topics->where('topic_id', 2)->first();
                if ($unlockedTopic == null) {
                    redirect('/');
                } else {
                    return view('vektor', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                break;
            case 3:
                $unlockedTopic = $fis10user->topics->where('topic_id', 3)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                break;
            case 4:
                $unlockedTopic = $fis10user->topics->where('topic_id', 4)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('gerakparabola', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 5:
                $unlockedTopic = $fis10user->topics->where('topic_id', 5)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('gerakmelingkarberaturan', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 6:
                $unlockedTopic = $fis10user->topics->where('topic_id', 6)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('hukumnewtongerak', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 7:
                $unlockedTopic = $fis10user->topics->where('topic_id', 7)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('hukumnewtongravitasi', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 8:
                $unlockedTopic = $fis10user->topics->where('topic_id', 8)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('usahadanenergi', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 9:
                $unlockedTopic = $fis10user->topics->where('topic_id', 9)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('momentumdanimpuls', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 10:
                $unlockedTopic = $fis10user->topics->where('topic_id', 10)->first();
                if ($unlockedTopic == null) {
                    return redirect()->route('home');
                } else {
                    return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                }
                return view('getaranharmonis', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
        }
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
