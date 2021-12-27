<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option_fitb;
use Illuminate\Http\Request;

class OptionfitbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('optionfitb_index',[
            'options' => Option_fitb::paginate(5)
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::where('question_type', 'fitb')->get();
        return view('optionfitb_create',[
             'questions' => $questions,
             'options' => Option_fitb::all()
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
        Option_fitb::create([
            'answer' => $request->answer,
            'question_id' => $request->question
        ]);

        return redirect('/admin/optionfitb')->with('createdOption','You have successfully created a new FITB Option');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option_fitb  $option_fitb
     * @return \Illuminate\Http\Response
     */
    public function show(Option_fitb $option_fitb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option_fitb  $option_fitb
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::where('question_type', 'mcq')->get();
        $options = Option_fitb::where('option_fitb_id',$id)->first();
        return view('optionfitb_edit',[
             'questions' => $questions,
             'options' => $options
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option_fitb  $option_fitb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Option_fitb::where('option_fitb_id',$id)->update([
            'answer' => $request->answer,
            'question_id' => $request->question
        ]);

        return redirect('/admin/optionfitb')->with('updatedOption','You have successfully updated the FITB Option');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option_fitb  $option_fitb
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option_fitb::where('option_fitb_id',$id)->delete();
        return redirect('/admin/optionfitb')->with('success','You have deleted the FITB option');
    }
}
