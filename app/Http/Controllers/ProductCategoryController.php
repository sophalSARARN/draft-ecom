<?php

namespace App\Http\Controllers;

use App\Models\Product_category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductCategory()
    {
        //
        $product_category = Product_category::all();
        return view('components.pd_cards.card1', compact('product_category'));
    }

    public function index()
    {
        //
        return Product_category::all();
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
     * @param  \App\Http\Requests\StoreProduct_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product_category = New Product_category();
        $product_category->name = $request->name;
        $product_category->desc = $request->desc;
        $product_category->save();
        return $product_category;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        return Product_category::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Product_category $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduct_categoryRequest  $request
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product_category = Product_category::findOrFail($id);
        $product_category->name = $request->name;
        $product_category->desc = $request->desc;
        $product_category->save();
        return $product_category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product_category  $product_category
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return Product_category::destroy($id);
    }
}
