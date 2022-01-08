<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Question;
use App\Models\Option_mcq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OptionmcqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('optionmcq_index',[
            'options' => Option_mcq::simplePaginate(10)
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $questions = Question::where('question_type', 'mcq')->get();
        return view('optionmcq_create',[
             'questions' => $questions,
             'options' => Option_mcq::all()
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
        Option_mcq::create([
            'option' => $request->option,
            'is_correct' => $request->iscorrect,
            'question_id' => $request->question
        ]);

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_mcq',
            'path' => 'OptionmcqController@store',
            'action' => 'Create OptionMCQ ' . Option_mcq::query()->first()->option_mcq_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect('/optionmcq')->with('createdOption','You have successfully created a new MCQ Option');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option_mcq  $option_mcq
     * @return \Illuminate\Http\Response
     */
    public function show(Option_mcq $option_mcq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option_mcq  $option_mcq
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::where('question_type', 'mcq')->get();
        $options = Option_mcq::where('option_mcq_id',$id)->first();
        return view('optionmcq_edit',[
             'questions' => $questions,
             'options' => $options
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option_mcq  $option_mcq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Option_mcq::where('option_mcq_id',$id)->update([
            'option' => $request->option,
            'is_correct' => $request->iscorrect,
            'question_id' => $request->question
        ]);

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_mcq',
            'path' => 'OptionmcqController@update',
            'action' => 'Edit OptionMCQ ' . $id,
            'ip_address' => $request->ip(),
        ]);

        return redirect('/optionmcq')->with('updatedOption','You have successfully updated the MCQ Option');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option_mcq  $option_mcq
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Option_mcq::where('option_mcq_id',$id)->delete();

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_mcq',
            'path' => 'OptionmcqController@destroy',
            'action' => 'Delete OptionMCQ ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);
        return redirect('/optionmcq')->with('success','You have deleted the MCQ option');
    }
}
