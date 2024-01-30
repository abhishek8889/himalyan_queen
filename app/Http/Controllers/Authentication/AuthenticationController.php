<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthenticationController extends Controller
{
    public function loginView(Request $request){
        return view('authentication.login');
    }
    public function loginProcess(Request $request){
        // dd($request);
        // $pass = Hash::make($request->password);
        // dd($pass);
        $email = $request->username;
        $password = $request->password;
        $credentials = array('email'=>$email,'password'=>$password);
        // dd($credentials);
        if(Auth::attempt($credentials)){
            // dd(auth()->user());
            return redirect('admin/dashboard')->with('success','Logged in succesfully !');
        }else{
            return redirect()->back()->with('error','Your credentials are incorrect .');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }
}
