<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Question;
use App\Models\Option_tof;
use App\Models\Option_fitb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'options' => Option_tof::simplePaginate(10)
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

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_tof',
            'path' => 'OptiontofController@store',
            'action' => 'Create OptionTOF ' . Option_tof::query()->latest()->first()->option_tof_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect('optiontof')->with('createdOption','You have successfully created a new TOF Option');
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

        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_tof',
            'path' => 'OptiontofController@update',
            'action' => 'Edit OptionTOF ' . Option_tof::query()->latest()->first()->option_tof_id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);

        return redirect('optiontof')->with('updatedOption','You have successfully updated the TOF Option');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option_tof  $option_tof
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        Option_tof::where('option_tof_id',$id)->delete();
        Log::query()->create([
            'user_id' => Auth::id(),
            'table' => 'fis10_option_tof',
            'path' => 'OptiontofController@destroy',
            'action' => 'Delete OptionTOF ' . $id,
            'url' => $request->fullUrl(),
            'ip_address' => $request->ip(),
        ]);
        return redirect('optiontof')->with('success','You have deleted the TOF option');
    }
}
