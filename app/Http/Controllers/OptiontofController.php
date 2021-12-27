<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;

class OptiontofController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('optiontof_index',[
            'options' => Option_tof::paginate(5)
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $questions = Question::where('question_type', 'tof')->get();
        return view('optiontof_create',[
             'questions' => $questions,
             'options' => Option_tof::all()
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
        Option_tof::create([
            'true_or_false' => $request->trueorfalse,
            'question_id' => $request->question
        ]);

        return redirect('/admin/optiontof')->with('createdOption','You have successfully created a new TOF Option');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option_tof  $option_tof
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option_tof  $option_tof
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::where('question_type', 'tof')->get();
        $options = Option_tof::where('option_tof_id',$id)->first();
        return view('optiontof_edit',[
             'questions' => $questions,
             'options' => $options
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option_tof  $option_tof
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Option_tof::where('option_tof_id', $id)->update([
            'true_or_false' => $request->trueorfalse,
            'question_id' => $request->question
        ]);

        return redirect('/admin/optiontof')->with('updatedOption','You have successfully updated the TOF Option');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option_tof  $option_tof
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Option_tof::where('option_tof_id',$id)->delete();
        return redirect('/admin/optiontof')->with('success','You have deleted the TOF option');
    }
}
