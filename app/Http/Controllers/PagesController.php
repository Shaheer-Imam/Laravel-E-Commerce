<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function HomePage1()
    {
        return view("homepage1");
    }
    public function Cart()
    {
        return view("cart");
    }
    public function CheckOut()
    {
        return view("checkout");
    }
    public function wishlist()
    {
        return view("wishlist");
    }
    public function shop()
    {
        return view("shop");
    }
    public function product()
    {
        return view("single-product");
    }
    public function category()
    {
        return view("category");
    }
    public function compare()
    {
        return view("compare");
    }
}
