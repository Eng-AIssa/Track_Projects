<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\Update;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $updates =null;
        return view('updates',compact('updates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('update');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update = new Update();
        $update->process_id = $request->project_number;
        $update->content = $request->project_update;
        $update->user_id = Auth::user()->id;
        $update->save();
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $updates = Update::where('process_id',$id)->get();
        return view('updates')->with(compact('updates'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function edit(Update $update)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Update $update)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Update  $update
     * @return \Illuminate\Http\Response
     */
    public function destroy(Update $update)
    {
        //
    }

    public function search(Request $request){

        $updates =null;
        if ($request->process_number  != null) {

            $updates = Update::where('process_id',$request->process_number)->get();
            if(!$updates->isEmpty())
                return view('updates')->with(compact('updates'));


            $updates = 'none';
            return view('updates')->with(compact('updates'));
        }
        return view('updates')->with(compact('updates'));
    }
}
