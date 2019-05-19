<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CategoryName;
use App\Products;
use App\ProductImage;

class ProductController extends Controller
{
    public function showhome()
    {
        return view('ecommerce.ecommerce_pages.home');
    }
    public function showproducts($productname)
    {
        $product  = Products::with('descriptions')->where('product_id',$productname)->first();
        // dd($product);
        $productImage =array();
        return view('ecommerce.ecommerce_pages.products')->with(compact("product"))->with(compact("productImage"));
    }

    public function fileCreate()
    {
        return view('imageupload');
    }
    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $imageSize = $image->getClientSize();
        $image->move(public_path('images'), $imageName);
        $imagePath = public_path('images').'/'. $imageName;

        $imageUpload = new ProductImage();
        $imageUpload->product_id = $request->ProductID;
        $imageUpload->product_image_link = $imageName;
        $imageUpload->product_image_size = $imageSize;
        $imageUpload->product_image_url = "/images/".$imageName;
        $imageUpload->save();
    
        return response()->json(['success' => true]);
    }
    public function fileDestroy(Request $request)
    {
        // return 'true';
        $filename = $request->get('filename');
        ProductImage::where('product_image_link', $filename)->delete();
        $path = public_path() . '/images/' . $filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }
    public function GetProductsImages(Request $request)
    {
        $productid = $request->get('productid');
        $productimages = ProductImage::select('product_image_link', 'product_image_size')->where('product_id' , $productid)->get();
        return response()->json($productimages); 
    }
}
