<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Pow;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // $products=["products"=>[[
        //     "product_name" => "P name",
        //     "img"=>"https://www.parents.com/thmb/tNa-YQ94dPXWVA2UaX52r2MQbGc=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/parents-update-brovave-womens-2023-summer-casual-boho-sundress-polka-dot-spaghetti-strap-tout-dcf8382ee3be4c29b6f37fdc129625bb.jpg"]
        //     ]
        
        // ];
        $products = Product::all();
        return view('components.pd_cards.card1', compact('products'));

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
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = New Product();
        $product->user_id = $request->user_id;
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->total_instock = $request->total_instock;
        $product->category_id = $request->category_id;
        $product->save();
        return $product;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Product::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->user_id = $request->user_id;
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->total_instock = $request->total_instock;
        $product->category_id = $request->category_id;
        $product->save();
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        return Product::destroy($id);
    }
}
