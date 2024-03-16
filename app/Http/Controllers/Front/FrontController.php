<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use App\Mail\CustomerQueryMail;
use Illuminate\Http\Request;
use Mail;
use App\Models\Itinerary;
use App\Models\SiteMeta;
use App\Models\Reviews;

class FrontController extends Controller
{
    public function home(Request $request){
      
        $destinations = Destination::all();
        $packages = Package::all();
        $reviews = Reviews::all();
        // dd($destinations);
        return view('user.home.index',compact('destinations','packages' ,'reviews'));
    }

    public function about(Request $request){
        return view('user.about.index');
    }

    public function service(Request $request){
        return view('user.service.index');
    }
    public function tourPackages(Request $request){
        $destinations = Destination::all();
        $packages = Package::all();
        return view('user.tour_packages.index',compact('destinations','packages'));
    }
    public function packageDetail(Request $request){
        $package = Package::where('slug',$request->slug)->first();
        $galleryMedia = $package->galleryMedia();
        // dd($galleryMedia);

        return view('user.tour_packages.package_detail',compact('package','galleryMedia'));
    }

    public function contact(Request $request){
        return view('user.contact.index');

    }

    public function destinationDetail(Request $req){
        $destinationSlug = $req->slug;
        $destination = Destination::where('slug',$destinationSlug)->first();
        $packages = Package::whereJsonContains('destination_id', (string)$destination->id)->get();
        return view('user.destinations.index',compact('packages'));
    }

    public function sendMail(Request $request){
        $siteEmail = SiteMeta::where('meta_key','site_email')->first();
       
        $data = [
            'type' => $request->type,
            'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
            'subject' => $request->subject,
            'description' => $request->description,
        ];
        if($request->type == 'query'){
            $envelopeSub = 'Customer Query';
        }

        if($request->type == 'booking'){
            $envelopeSub = 'New Booking Request';
        }
        try{
            Mail::to($siteEmail->meta_value)->send(new CustomerQueryMail($data,$envelopeSub)); 
            return response()->json(['status' => true , 'message'=>'Your mail is succesfully sent']);
        }catch(\Exception $e){
            return response()->json(['error'=>'$e->getMessage()']);
        }
    }
}
