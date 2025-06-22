<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Order::all();
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
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order = New Order();
        $order->p_detail_id = $request->p_detail_id;
        $order->order_no = $request->order_no;
        $order->payment_method = $request->payment_method;
        $order->describtion = $request->describtion;
        $order->is_paid = $request->is_paid;
        $order->total = $request->total;
        $order->delivery_method = $request->delivery_method;
        $order->delivered_at = $request->delivered_at;
        $order->save();
        return $order;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return Order::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $order = Order::findOrFail($id);
        $order->p_detail_id = $request->p_detail_id;
        $order->order_no = $request->order_no;
        $order->payment_method = $request->payment_method;
        $order->describtion = $request->describtion;
        $order->is_paid = $request->is_paid;
        $order->total = $request->total;
        $order->delivery_method = $request->delivery_method;
        $order->delivered_at = $request->delivered_at;
        $order->save();
        return $order;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Order::destroy($id);
    }
}
