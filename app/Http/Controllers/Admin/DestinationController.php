<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DestinationController extends Controller
{
    public function index(Request $request){
        $destinations = Destination::all();
        // $galleryMediaFromIds = Media::whereIn('id', json_decode($destination->banner_gallery))->get();
       
        return view('admin.destination.index',compact('destinations'));
    }
    public function addDestination(Request $request){
        
        return view('admin.destination.add');
    }
    public function addDestinationProcess(Request $request){
        // dd($request);
        $destination = new Destination;
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

        $destination->name = $request->name;
        $destination->banner_media = json_encode($banner_media_id);
        $destination->banner_title = $request->banner_title;
        $destination->banner_gallery = json_encode($gallery_media_list);
        $destination->about_activity = $request->about_activity;
        $destination->highlight = $request->highlight;
        $destination->save();

        return redirect()->back()->with('success','Your destination is saved succesfully !');
    }
}
