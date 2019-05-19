<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.admin_pages.Category.list_category');
    }

    public function create()
    {
        $name = Category::all();
        return view('admin.admin_pages.Category.create_category')->with(compact('name'));
    }
    public function save(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'CategoryName' => 'required|unique:Category,category_name|max:255'
            ]);
            $user_id = Auth::id();
            $categoryname = new Category;
            $categoryname->category_name = $request->CategoryName;
            $categoryname->subcategory_id = $request->ParentCategory;
            $categoryname->user_id = $user_id;
            $categoryname->category_description = '';
            $categoryname->save();

            session()->flash('success', 'category has been successfully added');
            return redirect()->route('category.index');
        }
        else{
            session()->flash('warning', 'category has not been updated');
            return back();
        }
    }
    
    public function delete($category_id)
    {
        Category::findOrFail($category_id)->delete();
        session()->flash('danger', 'category has been successfully deleted');
        return back();
    }
    public function edit($category_id)
    {
        $name = Category::whereNotIn('category_id', [$category_id])->get();
        $category = Category::findOrFail($category_id);
        return view('admin.admin_pages.Category.edit_category')->with(compact('category'))->with(compact('name'));
    }

    public function update(Request $request, $category_id)
    {
        if ($request->isMethod('post')) {
            // $validatedData = $request->validate([
            //     'CategoryName' => 'required|unique:Category,category_name|max:255'
            // ]);
            $user_id = Auth::id();
            $categoryname = Category::find($category_id);
            $categoryname->category_name = $request->CategoryName;
            $categoryname->subcategory_id = $request->ParentCategory;
            $categoryname->user_id = $user_id;
            $categoryname->category_description = '';
            $categoryname->save();

            session()->flash('success', 'Category has been successfully updated');
            return redirect()->route('category.index');
        } else {
            session()->flash('success', 'Category has not been updated');
            return back();
        }
    }

}
