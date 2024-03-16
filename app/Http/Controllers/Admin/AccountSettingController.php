<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\Models\User;

class AccountSettingController extends Controller
{
    public function setting(Request $request){
        return view('admin.account_setting.setting');
    }
    public function changePass(Request $request){
        $validate = $request->validate([
            'old_pass' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
        ]);
        $user = User::find(auth()->user()->id);
        if(Hash::check($request->old_pass, $user->password)) { 
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
            return redirect()->back()->with('success', 'Password changed');         
        }else {
        return redirect()->back()->with('success', 'Password changed');
        }
    }
}
