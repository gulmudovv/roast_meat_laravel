<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        
        return view('restaurant.index', compact('restaurants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRest= new Restaurant;
        
        $newRest->rest_name = $request->rest_name;
        $newRest->rest_desc = $request->rest_desc;
        $newRest->rest_rating = $request->rest_rating;
        $newRest->rest_time = $request->rest_time;
        
        if($request->file('rest_img')){
            $path = Storage::putFile('public', $request->file('rest_img'));
            $url = Storage::url($path);
            $newRest->rest_img = $url;
        }else{
            $newRest->rest_img = "";
        }
       

        $newRest->save();
        return redirect()->route('restaurant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $restaurant = Restaurant::find($id);
       $products = Product::where('prodRest_id', '=', $id)->get();
        return view('product.index', compact('restaurant', 'products'));
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
