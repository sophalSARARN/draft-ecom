<?php

namespace App\Http\Controllers;

use App\Models\Pre_order;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class PreOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Pre_order::all();
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
     * @param  \App\Http\Requests\StorePre_orderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pre_order = New Pre_order();
        $pre_order->p_detail_id = $request->p_detail_id;
        $pre_order->pre_order_no = $request->pre_order_no;
        $pre_order->payment_method = $request->payment_method;
        $pre_order->is_paid = $request->is_paid;
        $pre_order->total = $request->total;
        $pre_order->describtion = $request->describtion;
        $pre_order->save();
        return $pre_order();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pre_order  $pre_order
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return Pre_order::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pre_order  $pre_order
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePre_orderRequest  $request
     * @param  \App\Models\Pre_order  $pre_order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pre_order = Pre_order::findOrFail($id);
        $pre_order->p_detail_id = $request->p_detail_id;
        $pre_order->pre_order_no = $request->pre_order_no;
        $pre_order->payment_method = $request->payment_method;
        $pre_order->is_paid = $request->is_paid;
        $pre_order->total = $request->total;
        $pre_order->describtion = $request->describtion;
        $pre_order->save();
        return $pre_order();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pre_order  $pre_order
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return Pre_order::destroy($id);
    }
}
