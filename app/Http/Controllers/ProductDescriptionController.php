<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDescriptionController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.ProductDescription.list_attribute');
    }

    public function create()
    {
        return view('admin.admin_pages.ProductDescription.create_attribute');
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $user_id = Auth::id();
            $ProductAttribute = new ProductDescription;
            $ProductAttribute->attributes_name = $request->AttributeName;
            $ProductAttribute->save();

            session()->flash('success', 'Attributes has been successfully added');
            return redirect()->route('attribute.index');
        } else {
            session()->flash('warning', 'Attributes has not been updated');
            return back();
        }
    }

    public function delete($product_id)
    {
        ProductDescription::findOrFail($product_id)->delete();
        session()->flash('danger', 'Attributes has been successfully deleted');
        return back();
    }
    public function edit($product_id)
    {
        $attributes = ProductDescription::findOrFail($product_id);
        return view('admin.admin_pages.ProductDescription.edit_attribute')->with(compact('attributes'));
    }

    public function update(Request $request, $product_id)
    {
        if ($request->isMethod('post')) {
            $user_id = Auth::id();
            $ProductAttribute = ProductDescription::find($product_id);
            $ProductAttribute->attributes_name = $request->AttributeName;
            $ProductAttribute->save();
            session()->flash('success', 'Group Attributes has been successfully updated');
            return redirect()->route('attribute.index');
        } else {
            session()->flash('success', 'Attributes has not been updated');
            return back();
        }
    }
}