<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
   public function index()
   {
            $subcategory = Subcategory::where('status', '!=', '3')->get();
        return  view('admin.collection.subcategory.index')
           ->with('subcategory', $subcategory);

    }
    public function create()
    {
        $category = Category::where('status', '!=','3')->get();
        return view('admin.collection.subcategory.create')
           ->with('category', $category);
    }
    public function store(Request $request)
    {
        $subcategory = new Subcategory();
        $subcategory-> category_id = $request-> input('category_id');
        $subcategory-> name = $request-> input('name');
        $subcategory-> description =$request->input('description');
        $subcategory->status=$request->input('status')==true ? '1': '0';
        $subcategory->save();

        return redirect()->back()->with('status', 'Sub-Category Added Successfully');

    }
    public function edit($id)
    {
       // $category = category::where('status', '!=','3')->get(); //3= deleted data
        $subcategory = Subcategory::find($id);
        return view('admin.collection.subcategory.edit')
       //->with('category', $category)
       ->with('subcategory', $subcategory);
    }
    public function update(Request $request,$id)
    {
        //$subcategory= Subcategory::find($id);
        //$subcategory-> category_id = $request-> input('category_id');
       // $subcategory-> name = $request-> input('name');
       // $subcategory-> description =$request->input('description');

       // $subcategory->status=$request->input('status')==true ? '1': '0';
       // $subcategory->update();
       // return redirect()->back()->with('status', 'Subcategory Updated Successfully');

    }
    public function delete($id)
    {
        //$subcategory = Subcategory::find($id);
       // $subcategory->status ="3"; //0=show 1=hide 2=delete
       // $subcategory->update();
       // return redirect()->back()->with('status', 'Subcategory Deleted Successfully ');

    }
}
