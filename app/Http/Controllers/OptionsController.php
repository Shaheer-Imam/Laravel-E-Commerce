<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Options;
use App\Attributes;
use App\OptionsDescription;
use Auth;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_pages.AttributeOptions.list_attribute_options');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attributes::all();
        return view('admin.admin_pages.AttributeOptions.create_attribute_options')->with(compact('attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $Option = new Options;
            $Option->option_name = $request->OptionName;
            $Option->attributes_id = $request->AttributeID;
            $Option->save();
            session()->flash('success', 'Option has been added');
            return redirect()->route('options.index');
        } else {
            session()->flash('danger', 'Option has not been added');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributes = Attributes::all();
        $options = Options::where('option_id',$id)->first();
        return view('admin.admin_pages.AttributeOptions.edit_attribute_options')
            ->with(compact('attributes'))
            ->with(compact('options'));
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
            $Option = Options::find($id);
            $Option->option_name = $request->OptionName;
            $Option->attributes_id = $request->AttributeID;
            $Option->save();
            session()->flash('success', 'Group Attributes has been updated');
            return redirect()->route('options.index');
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
