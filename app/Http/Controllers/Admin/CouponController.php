<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $coupon= Coupon::all();
        return view('admin.coupon.view-coupon', compact('coupon'));
    }

    public function addcoupon(){
        return view('admin.coupon.add-coupon');
    }



    public function insert(Request $request){
        

        $request->validate([
            'title'=> 'required',
            'code'=> 'required|unique:coupons',
            'value'=> 'required',
        ]);
        $coupon = new Coupon();
        $coupon->title=$request->post('title');
        $coupon->code=$request->post('code');
        $coupon->value=$request->post('value');
        $coupon->save();
        return redirect('admin/coupon')->with('status', 'coupon Added');
    }

    public function edit($id){
        $coupon = Coupon::find($id);
        return view('admin.coupon.edit-coupon', compact('coupon'));
    } 

    
    public function update(Request $request, $id){
        

        $request->validate([
            'title'=> 'required',
            'code'=> 'required|unique:coupons',
            'value'=> 'required',
        ]);
        $coupon = Coupon::find($id);
        $coupon->title=$request->post('title');
        $coupon->code=$request->post('code');
        $coupon->value=$request->post('value');
        $coupon->save();
        return redirect('admin/coupon')->with('status', 'coupon Updated');
    }

    public function delete(Request $request, $id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect('admin/coupon')->with('status', 'coupon Deleted');   
    }

    public function status(Request $request, $status, $id){
        $coupon = Coupon::find($id);
        $coupon->status = $status;
        $coupon->save();
        return redirect('admin/coupon')->with('status', 'Status Updated');
    }

}
