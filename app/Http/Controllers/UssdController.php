<?php

namespace App\Http\Controllers;

use App\ussd;
use Illuminate\Http\Request;
use Validator;
use illuminate\Http\Response;


class UssdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getBalance(Request $request){
        $validate = Validator::make($request->all(),[
            'session_id'=>'required',
            'phone_no' => 'required'
        ]);
        if ($validate->fails()){
            return response()->json(['error'=>$validate->errors()], 400);
        }

        $phone_no = $request['phone_no'];
        $code = $request['code'];

        $user = ussd::where('phone_no',$phone_no)->first();
        if (isset($user->phone_no)){
            if ($code == "") {
                $response = "CON\n 1. Enter 1 to check your data balance.\n";
                $response .= "2. Enter 2 to quit";
            }

        if ($code == 1) {
            $response = response()->json([
                    'data_bal'=> (float) $user->data,
                ]);
        }

        if ($code == 2) {
            $response="END\n Transaction Completed \n";
            $response .="Thanks for using MTN \n";        }
        }
        return $response;
     }
    public function index()
    {
        //
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
     * @param  \App\ussd  $ussd
     * @return \Illuminate\Http\Response
     */
    public function show(ussd $ussd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ussd  $ussd
     * @return \Illuminate\Http\Response
     */
    public function edit(ussd $ussd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ussd  $ussd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ussd $ussd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ussd  $ussd
     * @return \Illuminate\Http\Response
     */
    public function destroy(ussd $ussd)
    {
        //
    }
}
