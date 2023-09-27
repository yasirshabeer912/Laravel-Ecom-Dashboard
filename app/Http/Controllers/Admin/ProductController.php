<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductFormRequest;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        $product= Product::all();
        return view('admin.product.view-product', compact('product'));
    }

    public function addproduct(){
        $category = Category::where('status', '0')->get();
        return view('admin.product.add-product', compact('category'));
    }


    public function insert(ProductFormRequest $request){
        $data = $request->validated();
        $product = new Product;
        $product->name =$data['name'];
        $product->product_slug =$data['product_slug'];
        $product->category_id =$data['category_id'];
        $product->description =$data['description'];
        $product->short_description =$data['short_description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $product->image = $filename;
        }
        $product->brand =$data['brand'];
        $product->technical_specification =$data['technical_specification'];
        $product->warranty =$data['warranty'];
        $product->uses =$data['uses'];
        $product->keywords =$data['keywords'];
        $product->save();

        return redirect('admin/product')->with('status' , 'product Added');

    }

    public function edit($id){
        $category = Category::where('status', '0')->get();
        $product = Product::find($id);
        return view('admin.product.edit-product', compact('product','category'));
    } 

    
    public function update(ProductFormRequest $request, $id){
        $data = $request->validated();
        $product = Product::find($id);
        $product->name =$data['name'];
        $product->product_slug =$data['product_slug'];
        $product->category_id =$data['category_id'];
        $product->description =$data['description'];
        $product->short_description =$data['short_description'];

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/images/', $filename);
            $product->image = $filename;
        }
        $product->brand =$data['brand'];
        $product->technical_specification =$data['technical_specification'];
        $product->warranty =$data['warranty'];
        $product->uses =$data['uses'];
        $product->keywords =$data['keywords'];
        $product->save();

        return redirect('admin/product')->with('status' , 'product updated');

    }

    public function delete(Request $request, $id){
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/product')->with('status', 'product Deleted');   
    }

    public function status(Request $request, $status, $id){
        $product = Product::find($id);
        $product->status = $status;
        $product->save();
        return redirect('admin/product')->with('status', 'Status Updated');
    }
}
