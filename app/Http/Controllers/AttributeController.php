<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attributes;
use Illuminate\Support\Facades\Auth;
use App\AttributeGroup;

class AttributeController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.Attribute.list_attribute');
    }

    public function create()
    {
        return view('admin.admin_pages.Attribute.create_attribute');
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'AttributeName' => 'required|unique:Attributes,attributes_name|max:255'
            ]);
            $user_id = Auth::id();
            $ProductAttribute = new Attributes;
            $ProductAttribute->attributes_name = $request->AttributeName;
            $ProductAttribute->save();

            session()->flash('success', 'Attributes has been successfully added');
            return redirect()->route('attribute.index');
        }
        else{
            session()->flash('warning', 'Attributes has not been updated');
            return back();
        }
    }
    
    public function delete($attribute_id)
    {
        Attributes::findOrFail($attribute_id)->delete();
        session()->flash('danger', 'Attributes has been successfully deleted');
        return back();
    }
    public function edit($attribute_id)
    {
        $attributes = Attributes::findOrFail($attribute_id);
        return view('admin.admin_pages.Attribute.edit_attribute')->with(compact('attributes'));
    }

    public function update(Request $request, $attribute_id)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'AttributeName' => 'required|unique:Attributes,attributes_name|max:255',
            ]);
            $user_id = Auth::id();
            $ProductAttribute = Attributes::find($attribute_id);
            $ProductAttribute->attributes_name = $request->AttributeName;
            $ProductAttribute->save();
            session()->flash('success', 'Group Attributes has been successfully updated');
            return redirect()->route('attribute.index');
        } else {
            session()->flash('success', 'Attributes has not been updated');
            return back();
        }
    }

    public function updateproduct(Request $request, $page_id)
    {
       if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'AttributeName' => 'required|unique:Attributes,attributes_name|max:255'
            ]);
            if ($validatedData->fails()) {
                session()->flash('success', 'Attributes has not been updated');
                return back();
            }
            $user_id = Auth::id();
            foreach ($request->Attributes as $attribute) {
                $ProductAttribute = new Attributes;
                $ProductAttribute->attributes_name = $attribute['AttributeName'];
                $ProductAttribute->product_id = $page_id;
                // Change product ID
                $ProductAttribute->user_id = $user_id;
                $ProductAttribute->attribute_group_id = $attribute['AttributeGroup'];
                $ProductAttribute->save();
            }

            session()->flash('success', 'Group Attributes has been successfully updated');
            return redirect()->route('attribute.index');
        } else {
            session()->flash('success', 'Attributes has not been updated');
            return back();
        }
    }
}
