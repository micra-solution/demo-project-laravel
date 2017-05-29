<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\validator;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //load admin login view
    public function index(){

        if(Auth::check()) {
                
                return redirect('admin/manageuser');
         }
        return view('admin.login');   
    	
    }
    //load admin dashbord view
    public function dashbord()
    {
    	return view('layout.admin.main');
    }
    //admin logout
    public function logout()
    {
    	Auth::logout(Auth::user()->id);
    	return redirect('admin/');
    }
    //admin login menually  code
    public function login(Request $req)
    {
    	    $data = $req->all();
            //validation of received input
            $rule = [

                    'email' => 'required|email',
                    'password' => 'required|min:6'
            ];

            $msg = [
                     'email' => 'Invalid Email',
                     'required' => 'Field can\'t be blank.',
                     'password.min' => 'Wrong Password'
            ];

            $valid = validator::make($data,$rule,$msg);
            // dd($valid);
            //if validation is fail
            if($valid->fails())
            {   
                return back()->withInput()
                ->withErrors($valid);
            }

            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']]))
            {
 
                    //auth success
                    if(  Auth::user()->hasRole('admin') || Auth::user()->hasRole('sub_admin') )
                    {
                        return redirect('admin/manageuser');
                    }

                   Auth::logout();
                   session()->flash('msg','You Not Authorized Person to allow login at');
                   return back();
            }
           session()->flash('msg','Plz Check Wrong Email or Password');
                    return back();
    	  
    }
}
