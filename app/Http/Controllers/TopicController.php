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
    public function show($id)
    {
        //
        $topic = Topic::where('topic_id', $id)->first();

        $topiceasy = Topic::where('difficulty','easy')->get();
        $topichard = Topic::where('difficulty','hard')->get();

        $topicsEasy = $topiceasy[$id - 1]->topic_id;
        $topicsHard = $topichard[$id - 1]->topic_id;

        $fis10user = Fis10User::query()->where('user_id', Auth::id())->first();
        $unlockedTopics = $fis10user->topics;

        switch($id){
            case 1:
                return view('besarandansatuan', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 2:
                return view('vektor', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 3:
                return view('geraklurus', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 4:
                return view('gerakparabola', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 5:
                return view('gerakmelingkarberaturan', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 6:
                return view('hukumnewtongerak', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 7:
                return view('hukumnewtongravitasi', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 8:
                return view('usahadanenergi', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 9:
                return view('momentumdanimpuls', compact('topic','topicsEasy','topicsHard', 'unlockedTopics'));
                break;
            case 10:
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
