<?php

namespace App\Http\Controllers\Ecommerce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Products;
use App\ProductImage;
use App\ProductDescription;

class ProductController extends Controller
{
    public function show($product_id = 1)
    {
        $product = Products::findOrFail($product_id);
        $productImage = ProductImage::where('product_id', $product_id)->get();
        $RelatedProducts = Products::where('category_id',$product->category_id)->inRandomOrder()->paginate(10);
        $ProductDescription = ProductDescription::where('product_id' , $product_id)->first();
        // dd($ProductDescription);
        // dd($productImage);
        // return view('ecommerce.ecommerce_pages.products')
        return view('single-product')
                        ->with(compact('product'))
                        ->with(compact('productImage'))
                        ->with(compact('RelatedProducts'))
                        ->with(compact('ProductDescription'));
    }
}
