<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // login page
    public function index(Request $request){
        if ($request->session()->has('ADMIN_LOGIN')) {
            redirect('admin/dashboard');
        } 
        else{
        
            return view('admin.login');
        }
        return view('admin.login');
    }

    // dashboard
    public function dashboard(){
        return view('admin.dashboard');
    }


    // authentication and login functionality
    public function auth(Request $request){
        $email = $request->post('email');
        $password = $request->post('password');
        
        $result = Admin::where(['email'=>$email])->first();
        if($result){
           if(Hash::check($request->post('password'), $result->password)){
              $request->session()->put('ADMIN_LOGIN', true);
              $request->session()->put('ADMIN_ID', $result->id );
              
              
              return redirect('admin/dashboard');
           }else{
              return redirect('admin')->with('error', 'Invalid Password');
           }
        }else{
           return redirect('admin')->with('error', 'Invalid Credentials');
        }
     }
     

}
