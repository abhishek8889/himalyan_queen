<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Media;
use App\Events\DeleteMedia;



class DestinationController extends Controller
{
    public function index(Request $request){
        $destinations = Destination::paginate(4);
        return view('admin.destination.index',compact('destinations'));
    }
    public function addDestination(Request $request){
        return view('admin.destination.add');
    }
    public function addDestinationProcess(Request $request){
      
        $validatedData = $request->validate([
            'name' => 'required',
            'sub_title' => 'required',
        ]);

        if(isset($request->destination_id)){
            $destination = Destination::find($request->destination_id);
        }else{
            $destination = new Destination;
        }

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

        $name = $request->name;
        $destination_slug = strtolower(str_replace(' ', '-', $name));

        $destination->name = $request->name;
        $destination->slug = $destination_slug;
        if(isset($banner_media_id) && !empty($banner_media_id)){
            if(isset($request->destination_id)){
                $dlt_banner_media_id = array($destination->banner_media);
               
                event(new DeleteMedia($dlt_banner_media_id));
            }
            $destination->banner_media = $banner_media_id;
        }
        $destination->subtitle = $request->sub_title;
        
        $destination->save();

        if(isset($request->destination_id)){
            return redirect()->back()->with('success','Your Destination is succesfully updated.');
        }else{
            return redirect()->back()->with('success','Your Destination is succesfully added.');
        }
    }
    public function editDestination(Request $req){
        $destination = Destination::find($req->id);
        return view('admin.destination.edit',compact('destination'));
    }
    // public function editDestinationProc(Request $req){
    //     $destinationID = $req->destination_id;
    //     $destination = Destination::find($destinationID);

    //     $name = $req->name;
    //     $destination_slug = strtolower(str_replace(' ', '-', $name));

    //     $destination->name = $req->name;
    //     $destination->slug = $destination_slug;
    //     // $destination->banner_media = $banner_media_id;
    //     $destination->subtitle = $req->sub_title;
    //     $destination->update();

    //     return redirect()->back()->with('success','Your Destination is succesfully updated.');
    // }
    public function deleteDestination(Request $req){
        $destination = Destination::find($req->id);
        $destination->delete();
        return redirect()->route('destination.list')->with('success','You have successfully delete the destination.');
    }
}
