<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Restaurant;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $restaurant = '';
        return view('product.index', compact('products', 'restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants  = Restaurant::all();
        $types = Type::all();

        return view('product.create', compact('restaurants', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= new Product;
        $product->prodRest_id = $request->rest_select;
        $product->prodType_id = $request->type_select;
        $product->prod_name = $request->product_name;
        $product->prod_desc = $request->product_desc;
        $product->prod_price = $request->product_price;
        
        if($request->file('product_img')){
            $path = Storage::putFile('public', $request->file('product_img'));
            $url = Storage::url($path);
            $product->prod_img = $url;
        }
       

        $product->save();
        return redirect()->route('product.index');
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
}
