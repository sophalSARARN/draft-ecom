<?php

namespace App\Http\Controllers;

use App\Models\User_address;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User_address::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUser_addressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user_address= New User_address();
        $user_address->home_no = $request->home_no;
        $user_address->phone = $request->phone;
        $user_address->telegram = $request->telegram;
        $user_address->map = $request->map;
        $user_address->Describtion = $request->Describtion;
        $user_address->save();
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return User_address::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUser_addressRequest  $request
     * @param  \App\Models\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_address  $user_address
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return User_address::destroy($id);
    }
}
