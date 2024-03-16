<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Media;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Models\Itinerary;
use Illuminate\Support\Facades\Storage;

use App\Events\DeleteMedia;

class PackageController extends Controller
{
    public function index(Request $request){
        $packages = Package::paginate(4);
        // $galleryMediaFromIds = Media::whereIn('id', json_decode($destination->banner_gallery))->get();
       
        return view('admin.package.index',compact('packages'));
    }
    public function addPackage(Request $request){
        $destinations = Destination::all();
        return view('admin.package.add',compact('destinations'));
    }
    public function editPackage(Request $request){
        $package = Package::find($request->id);
        $destinations = Destination::all();
        $itineraries = Itinerary::where('package_id',$request->id)->get();
       
        return view('admin.package.edit',compact('package','destinations','itineraries'));
    }

    public function deletePackage(Request $request){
        $package = Package::find($request->id)->delete();
        return redirect()->route('package.list')->with('success','You have successfully deleted the package.');
    }
    public function addPackageProcess(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            // 'destination_id' => 'required',
            'banner_title' => 'required',
        ]);

        if(isset($request->id)){
            $package = Package::find($request->id);
           
        }else{
            $package = new Package;
        }

        $mediaDetails = array();
        if($request->has('banner_media')){
            $banner_media = $request->file('banner_media');
            $imageName = time() . '.' . $banner_media->extension();
            $banner_media->storeAs('public/PackageBanner', $imageName);

            $imageUrl = asset('storage/PackageBanner/'.$imageName);
            $directoryPath = asset('storage/PackageBanner');

            $banner_media = new Media;
            $banner_media->image_name = $imageName;
            $banner_media->image_url = $imageUrl;
            $banner_media->directory_path = $directoryPath;
            $banner_media->save();
            $banner_media_id = $banner_media->id;
        }
        if($request->has('gallery')){
            foreach($request->file('gallery') as $image){
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->storeAs('public/PackageBanner', $imageName);
                $imageUrl = asset('storage/PackageBanner/'.$imageName);
                $directoryPath = asset('storage/PackageBanner');

                $gallery_media = new Media;
                $gallery_media->image_name = $imageName;
                $gallery_media->image_url = $imageUrl;
                $gallery_media->directory_path = $directoryPath;
                $gallery_media->save();

                $gallery_media_list[] = $gallery_media->id;
            }
        }
        
    
        $name = $request->name;
        // $package_slug = strtolower(str_replace("/[\/|\\\ ]/", '-', $name));
        $package_slug = strtolower(str_replace(["/", " ", "|", "\\"], "-", $name));

        $package->name = $request->name;
        $package->slug = $package_slug;
        if(isset($banner_media_id)){
            if(isset($request->id)){
                $dlt_banner_media_id = array(json_decode($package->banner_media));
                event(new DeleteMedia($dlt_banner_media_id));
            }
            $package->banner_media = json_encode($banner_media_id);
        }
        $package->destination_id = json_encode($request->destination_id);
        $package->banner_title = $request->banner_title;
        if(isset($gallery_media_list) && is_array($gallery_media_list)){
            if(isset($request->id)){
                $dlt_banner_gallery_id = $package->banner_gallery;
                event(new DeleteMedia(json_decode($dlt_banner_gallery_id)));
            }
            $package->banner_gallery = json_encode($gallery_media_list);
        }
        $package->about_activity = $request->about_activity;
        $package->highlight = $request->highlight;
        $package->save();

        $this->saveItinirary($package->id , $request->itenirary);

        if(isset($request->id)){
            return redirect()->back()->with('success','Your package is updated succesfully !');
        }else{
            return redirect()->back()->with('success','Your package is saved succesfully !');
        }
    }

    public function saveItinirary($packageID,$data):void {
       
        if(!empty($packageID)){
            Itinerary::where('package_id',$packageID)->delete();
            if(is_array($data)){
                foreach($data as $d){
                    // if(isset($d['id']) && $d['id'] != null && !empty($d['id'])){
                    //     $itinerary = Itinerary::find($d['id']);
                    //     $itinerary->day = $d['title'] ;
                    //     $itinerary->plans = $d['plan'];
                    //     $itinerary->update();
                    // }else{
                    //     $itinerary = new Itinerary;
                    //     $itinerary->package_id = $packageID;
                    //     $itinerary->day = $d['title'] ;
                    //     $itinerary->plans = $d['plan'];
                    //     $itinerary->save();
                    // }
                    $itinerary = new Itinerary;
                    $itinerary->package_id = $packageID;
                    $itinerary->day = $d['title'] ;
                    $itinerary->plans = $d['plan'];
                    $itinerary->save();
                }
            }
        }
    }
}
