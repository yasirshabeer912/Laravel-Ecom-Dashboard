<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category= Category::all();
        return view('admin.category.view-category', compact('category'));
    }

    public function addCategory(){
        return view('admin.category.add-category');
    }



    public function insert(Request $request){
        

        $request->validate([
            'category_name'=> 'required',
            'category_slug'=> 'required|unique:categories',
        ]);
        $category = new Category();
        $category->category_name=$request->post('category_name');
        $category->category_slug=$request->post('category_slug');
        $category->status=1;
        $category->save();
        return redirect('admin/category')->with('status', 'Category Added');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', compact('category'));
    } 

    
    public function update(Request $request, $id){
        

        $request->validate([
            'category_name'=> 'required',
            'category_slug'=> 'required|unique:categories',
        ]);
        $category = Category::find($id);
        $category->category_name=$request->post('category_name');
        $category->category_slug=$request->post('category_slug');
        $category->save();
        return redirect('admin/category')->with('status', 'Category Updated');
    }

    
    public function delete(Request $request, $id){
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category')->with('status', 'Category Deleted');   
    }
    
    public function status(Request $request, $status, $id){
        $category = Category::find($id);
        $category->status = $status;
        $category->save();
        return redirect('admin/category')->with('status', 'Status Updated');
    }
}
