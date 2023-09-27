<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){
        $color= Color::all();
        return view('admin.color.view-color', compact('color'));
    }

    public function addcolor(){
        return view('admin.color.add-color');
    }



    public function insert(Request $request){
        

        $request->validate([
            'color'=> 'required|unique:colors',
        ]);
        $color = new Color();
        $color->color=$request->post('color');
        $color->status=1;
        $color->save();
        return redirect('admin/color')->with('status', 'color Added');
    }

    public function edit($id){
        $color = Color::find($id);
        return view('admin.color.edit-color', compact('color'));
    } 

    
    public function update(Request $request, $id){
        

        $request->validate([
            'color'=> 'required|unique:colors',
        ]);
        $color = Color::find($id);
        $color->color=$request->post('color');
        $color->save();
        return redirect('admin/color')->with('status', 'color Updated');
    }

    public function delete(Request $request, $id){
        $color = Color::find($id);
        $color->delete();
        return redirect('admin/color')->with('status', 'color Deleted');   
    }

    public function status(Request $request, $status, $id){
        $color = Color::find($id);
        $color->status = $status;
        $color->save();
        return redirect('admin/color')->with('status', 'Status Updated');
    }
}
