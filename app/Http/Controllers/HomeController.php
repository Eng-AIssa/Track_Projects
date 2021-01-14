<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
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



    public function private(Request $request){
        $user = new User();
        $user->name = $request['name'];
        $user->employee_id = $request['employee_id'];
        $user->national_id = $request['national_id'];
        $user->nationality = $request['nationality'];
        $user->gender = $request['gender'];
        $user->region = $request['region'];
        $user->join_date = $request['join_date'];
        $user->contract_exp = $request['contract_exp'];
        $user->iqama_exp = $request['iqama_exp'];
        $user->position_id = $request['position'];
        $user->phone = $request['phone'];
        $user->basic = $request['basic'];
        $user->housing = $request['housing'];
        $user->transportation = $request['transportation'];
        $user->other = $request['other'];
        $user->total_salary = $request['total_salary'];
        $user->iban = $request['iban'];
        $user->bank = $request['bank'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect('home');
    }

    public function employees(){
        $employees = User::all();
        return view('employees')->with(compact('employees'));
    }

    public function details(Request $request){

        $my_user =null;
        if ($request->user_id  != null) {
            $users = User::all();
            foreach ($users as $User) {
                if ($User->id == $request->user_id) {
                    $my_user = User::find($request->user_id);
                    return view('employee')->with(compact('my_user'));
                }
            }
            $my_user = 'none';
            return view('employee')->with(compact('my_user'));
        }
        return view('employee')->with(compact('my_user'));

    }
}
