<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category:: where('status', '!=', '3')->get();
        return view('admin.collection.category.index')
            ->with('category',$category);

    }
    public function create()
    {
        $group = Groups::where('status', '!=','3')->get();
        return view('admin.collection.category.create')
            ->with('group', $group);
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category-> group_id = $request-> input('group_id');
        $category-> name = $request-> input('name');
        $category-> description =$request->input('description');
        $category->status=$request->input('status')==true ? '1': '0';
        $category->save();
        return redirect()->back()->with('status', 'Category Added Successfully');

    }
    public function edit($id)
    {
        $group = Groups::where('status', '!=','3')->get(); //3= deleted data
        $category = Category::find($id);
        return view('admin.collection.category.edit')
       ->with('group', $group)
       ->with('category', $category);
    }
    public function update(Request $request,$id)
    {
        $category= Category::find($id);
        $category-> group_id = $request-> input('group_id');
        $category-> name = $request-> input('name');
        $category-> description =$request->input('description');

        $category->status=$request->input('status')==true ? '1': '0';
        $category->update();
        return redirect()->back()->with('status', 'Category Updated Successfully');

    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->status ="3"; //0=show 1=hide 2=delete
        $category->update();
        return redirect()->back()->with('status', 'Category Data Deleted');

    }
}
