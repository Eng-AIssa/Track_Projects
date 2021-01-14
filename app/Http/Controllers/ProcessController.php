<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $processes = Process::with('user')->get();
        return view('processes')->with(compact('processes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('new_process')->with(compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $message = [ 'message' => 'task added Successfully'];
        $process = new Process();
        $user  = Auth::user();
        $process->user_id = $request->assigned_to;
        $process->creator = $user->name;
        $process->work_order_number = $request->work_order;
        $process->day = $request->day;
        $process->date = $request->date;
        $process->business_type = $request->business_type;
        $process->agent_type = $request->agent_type;
        $process->agent_name = $request->agent_name;
        $process->project_name = $request->project_name;
        $process->principal_name = $request->principal_name;
        $process->address = $request->address;
        $process->telephone = $request->telephone;
        $process->phone = $request->phone;
        $process->email = $request->email;
        $process->wasel_mail = $request->wasel;
        $process->work_report = $request->report;
        $process->attachments = $request->attachments;
        $process->price = $request->price;
        $process->full_price = $request->full_price;
        $process->half_price = $request->half_price;
        $process->full_price_check = $request->boolean('full_price_check');
        $process->half_price_check = $request->boolean('half_price_check');
        $process->dept = $request->full_price_check;
        $process->dept = $request->boolean('dept');

        $process->save();
        return redirect('dashboard')->with($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $my_process =null;
        if ($request->process_number  != null) {
            $processes_number = Process::all();
            foreach ($processes_number as $process) {
                if ($process->id == $request->process_number) {
                    $my_process = Process::with('user')->find($request->process_number);
                    return view('process')->with(compact('my_process'));
                }
            }
            $my_process = 'none';
            return view('process')->with(compact('my_process'));
        }
        return view('process')->with(compact('my_process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $process)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $process)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Process  $process
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $process)
    {
        //
    }
}
