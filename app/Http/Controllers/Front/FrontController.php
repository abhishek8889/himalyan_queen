<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\CustomerQueryMail;
use Illuminate\Http\Request;
use Mail;

class FrontController extends Controller
{
    public function home(Request $request){
        return view('user.home.index');
    }

    public function about(Request $request){
        return view('user.about.index');
    }

    public function service(Request $request){
        return view('user.service.index');
    }
    public function tourPackages(Request $request){
        return view('user.tour_packages.index');
    }

    public function contact(Request $request){
        return view('user.contact.index');

    }

    public function sendMail(Request $request){
        //    $data = 'hello';
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description,
        ];
        try{
            Mail::to(env('ADMIN_MAIL'))->send(new CustomerQueryMail($data)); 
            return redirect()->back()->with('success','Your mail is succesfully sent');
        }catch(\Exception $e){
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
}
