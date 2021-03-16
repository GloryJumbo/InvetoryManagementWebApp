<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index()
    {
        $group = Groups::where('status','!=', '2')->get();
        return view('admin.collection.group.index')
            ->with('group', $group);
    }
    public function viewpage()
    {
        return view('admin.collection.group.create');
    }
    public function store(Request $request)
    {
        $group = new Groups();
        $group-> name = $request-> input('name');
        $group-> descrip =$request->input('descrip');
        if($request->input('status')==true){
            $group->status="1";
        }
        else
        {
            $group->status="0";
        }
        $group->save();
        return redirect()->back()->with('status', 'Group Data Added Successfully');

    }
    public function edit($id)
    {
        $group = Groups::find($id);
        return view('admin.collection.group.edit')
        ->with('group', $group);
    }
    public function update(Request $request,$id)
    {
        $group = Groups::find($id);
        $group-> name = $request-> input('name');
        $group-> descrip =$request->input('descrip');
        $group->status=$request->input('status')==true ? '1': '0';

        $group->update();
        return redirect()->back()->with('status', 'Group Data Updated Successfully');

    }
    public function delete($id)
    {
        $group = Groups::find($id);
        $group->status ="2"; //0=show 1=hide 2=delete
        $group->update();
        return redirect()->back()->with('status', 'Group Data Deleted');

    }
}

