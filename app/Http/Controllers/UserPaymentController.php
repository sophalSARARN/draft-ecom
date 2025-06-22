<?php

namespace App\Http\Controllers;

use App\Models\User_payment;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class UserPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User_payment::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser_paymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_payment = New User_payment();
        $user_payment ->user_id = $request->user_id;
        $user_payment ->payment_type = $request->payment_type;
        $user_payment ->provider = $request->provider;
        $user_payment ->account_no = $request->account_no;
        $user_payment ->expiry = $request->expiry;
        $user_payment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User_payment::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_paymentRequest  $request
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $user_payment = User_payment::findOrFail($id);
        $user_payment ->user_id = $request->user_id;
        $user_payment ->payment_type = $request->payment_type;
        $user_payment ->provider = $request->provider;
        $user_payment ->account_no = $request->account_no;
        $user_payment ->expiry = $request->expiry;
        $user_payment->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_payment  $user_payment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return User_payment::destroy($id);
    }
}
