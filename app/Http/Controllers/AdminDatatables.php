<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes;
use App\AttributeGroup;
use Datatables;
use Illuminate\Support\Collection;
use App\Options;
use App\AttributeOptions;
use App\Products;
use App\Category;


class AdminDatatables extends Controller
{
    public function GetListProductsDuplicate()
    {
        // $products = Products::select('product_name', 'product_price', 'product_status', 'product_quantity', 'product_id')->get();
        $products = Products::get();
        $record = [];
        foreach ($products as $product) {
            $data = array();
            $data['product_name'] = $product->product_name;
            $data['product_price'] = $product->product_price;
            $data['product_status'] = (($product->product_status % 2 == 1) ? '<a href="http://127.0.0.1:8000/admin/changeActive/' . $product->product_id . '" class="btn mr-1 mb-1 btn-success btn-sm"> Active</button>' : '<a href="http://127.0.0.1:8000/admin/changeActive/' . $product->product_id . '" class="btn mr-1 mb-1 btn-danger btn-sm">Deactive</a>');
            $data['product_quantity'] = $product->product_quantity;
            $data['product_id'] = "<a href=" . url("admin/EditProduct/$product->product_id") . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . url("admin/delete/$product->product_id") . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        // $products = $record;
        // return $record;
        $collection = new Collection($record);
        return Datatables::of($collection)->make();
    }
    public function getAttributes()
    {
        // $products = Products::select('product_name', 'product_price', 'product_status', 'product_quantity', 'product_id')->get();
        $attributes = Attributes::all();
        $record = [];
        foreach ($attributes as $item) {
            $data = array();
            $data['attribute_name'] = $item->attributes_name;
            $data['actions'] = "<a href=" . route('attribute.edit', $item->attributes_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('attribute.delete', $item->attributes_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        return Datatables::of($collection)->make();
    }
    public function Options()
    {
        $options = Options::all();
        $record = [];
        foreach ($options as $item) {
            $data = array();
            $data['options_name'] = $item->option_name;
            $data['actions'] = "<a href=" . route('options.edit', $item->option_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('options.delete', $item->options_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        // dd($collection);
        return Datatables::of($collection)->make();
    }

    public function Category()
    {
        $Category = Category::all();
        $record = [];
        foreach ($Category as $item) {
            $data = array();
            $data['options_name'] = $item->category_name;
            $data['actions'] = "<a href=" . route('category.edit', $item->category_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('category.delete', $item->category_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        // dd($collection);
        return Datatables::of($collection)->make();
    }

    public function ProductAttributes($ProductID)
    {
        $options = AttributeOptions::with('attributes','options', 'products')->where('product_id',$ProductID)->orderBy('updated_at', 'desc')->get();
        $record = [];
        foreach ($options as $item) {
            $data = array();
            $data['attribute_name'] = $item->attributes->attributes_name;
            $data['options_name'] = $item->options->option_name;
            $data['AdditionalPrice'] = $item->AdditionalPrice;
            $data['actions'] = "<a href=" . route('options.edit', $item->option_id) . " class='btn mr-1 mb-1 btn-info btn-sm'> Edit</a><a href=" . route('options.delete', $item->options_id) . " class='btn mr-1 mb-1 btn-danger btn-sm'> Delete</button>";
            $record[] = $data;
        }
        $collection = new Collection($record);
        return Datatables::of($collection)->make();
    }
    
}