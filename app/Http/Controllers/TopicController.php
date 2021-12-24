<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

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
        switch($id){
            case 1:
                return view('besarandansatuan', compact('topic'));
                break;
            case 2:
                return view('vektor', compact('topic'));
                break;
            case 3:
                return view('geraklurus', compact('topic'));
                break;
            case 4:
                return view('gerakparabola', compact('topic'));
                break;
            case 5:
                return view('gerakmelingkarberaturan', compact('topic'));
                break;
            case 6:
                return view('hukumnewtongerak', compact('topic'));
                break;
            case 7:
                return view('hukumnewtongravitasi', compact('topic'));
                break;
            case 8:
                return view('usahadanenergi', compact('topic'));
                break;
            case 9:
                return view('momentumdanimpuls', compact('topic'));
                break;
            case 10:
                return view('getaranharmonis', compact('topic'));
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
