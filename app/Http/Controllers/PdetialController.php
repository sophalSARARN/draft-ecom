<?php

namespace App\Http\Controllers;

use App\Models\P_detial;
use App\Http\Requests\StoredetialRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class PdetialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return P_detial::all();
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
     * @param  \App\Http\Requests\StoredetialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $p_detail = New P_detial();
        $p_detail->product_id = $request ->product_id;
        $p_detail->color = $request ->color;
        $p_detail->size = $request ->size;
        $p_detail->fabric = $request ->fabric;
        $p_detail->hieght = $request ->hieght;
        $p_detail->heals = $request ->heals;
        $p_detail->save();
        return $p_detail;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\detial  $detial
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return P_detail::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\detial  $detial
     * @return \Illuminate\Http\Response
     */
    public function edit(detial $detial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedetialRequest  $request
     * @param  \App\Models\detial  $detial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $p_detail = P_detial::findOrFail($id);
        $p_detail->product_id = $request ->product_id;
        $p_detail->color = $request ->color;
        $p_detail->size = $request ->size;
        $p_detail->fabric = $request ->fabric;
        $p_detail->hieght = $request ->hieght;
        $p_detail->heals = $request ->heals;
        $p_detail->save();
        return $p_detail;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\detial  $detial
     * @return \Illuminate\Http\Response
     */
    public function destroy(detial $detial)
    {
        //
        return P_detail::destroy($id);
    }
}
