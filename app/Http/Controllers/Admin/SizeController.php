<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $size= Size::all();
        return view('admin.size.view-size', compact('size'));
    }

    public function addsize(){
        return view('admin.size.add-size');
    }



    public function insert(Request $request){
        

        $request->validate([
            'size'=> 'required|unique:sizes',
        ]);
        $size = new Size();
        $size->size=$request->post('size');
        $size->status=1;
        $size->save();
        return redirect('admin/size')->with('status', 'size Added');
    }

    public function edit($id){
        $size = Size::find($id);
        return view('admin.size.edit-size', compact('size'));
    } 

    
    public function update(Request $request, $id){
        

        $request->validate([
            'size'=> 'required|unique:sizes',
        ]);
        $size = Size::find($id);
        $size->size=$request->post('size');
        $size->save();
        return redirect('admin/size')->with('status', 'size Updated');
    }

    public function delete(Request $request, $id){
        $size = Size::find($id);
        $size->delete();
        return redirect('admin/size')->with('status', 'size Deleted');   
    }

    public function status(Request $request, $status, $id){
        $size = Size::find($id);
        $size->status = $status;
        $size->save();
        return redirect('admin/size')->with('status', 'Status Updated');
    }
}
