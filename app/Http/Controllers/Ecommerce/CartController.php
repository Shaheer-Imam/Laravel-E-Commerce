<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use App\Products;
use App\ProductImage;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems = Cart::content();
        // Get the ids from associated models of the cartItems
        $ids = $cartItems->pluck('id');
        $image=[];
        $count = 0;
        for($i = 0; $i < count($ids); $i++)
        {
            $image[$i] = ProductImage::where('product_id', $ids[$i])->first(); 
        }
        // dd($image);
        // Here you can go wild on eager loading your relationships
        // $image = ProductImage::where('product_id',$ids)->first()->value('product_image_url');

        return view('ecommerce.ecommerce_pages.cart')->with(compact('cartItems', 'image'));
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
        // return view('ecommerce.ecommerce_pages.cart');
        if ($request->isMethod('post')) {
            Cart::add($request->product_id, $request->product_name, $request->product_quantity, $request->product_price)
            ->associate('App\Products');
            session()->flash('success', 'Product has been successfully added to the cart');
            return back();
        }
        else{
            session()->flash('danger', 'You are not allowed to visit this page');
            return back();
        }
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
