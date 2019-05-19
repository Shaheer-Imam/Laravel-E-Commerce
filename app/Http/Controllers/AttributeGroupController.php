<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AttributeGroup;
use Auth;

class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_pages.AttributeGroup.list_attribute_group');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin_pages.AttributeGroup.create_attribute_group');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {

            $ProductAttribute = new AttributeGroup;
            $ProductAttribute->attribute_group_name = $request->AttributeGroupName;
            $ProductAttribute->save();
            session()->flash('success', 'Group Attributes has been added');
            return redirect()->route('attributegroup.index');
        } else {
            session()->flash('danger', 'Group Attributes has not been added');
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
        $attributeGroup  = AttributeGroup::findOrFail($id);
        return view('admin.admin_pages.AttributeGroup.edit_attribute_group')->with(compact('attributeGroup'));
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
        if ($request->isMethod('post')) {
            $user_id = Auth::id();
            $ProductAttributeGroup = AttributeGroup::find($id);
            $ProductAttributeGroup->attribute_group_name = $request->AttributeName;
            $ProductAttributeGroup->save();
            session()->flash('success', 'Group Attributes has been updated');
            return redirect()->route('attributegroup.index');
        } else {
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        session()->flash('danger', 'Attributes has been deleted');
        return back();
    }
}
