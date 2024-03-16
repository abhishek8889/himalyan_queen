<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CentralLogics\Helpers;
use Illuminate\Http\Request;
use App\Models\SiteMeta;

class SiteSettingController extends Controller
{
    //
    public function siteMeta(Request $req){
        $siteMeta = SiteMeta::all();
        return view('admin.account_setting.site_meta',compact('siteMeta'));
    }
    public function updateSiteMeta(Request $request){
        if($request->file()){
            $imageObj = $request->file();
            $image = null ;
            $storePath = 'site-icons';
            foreach($imageObj as $key => $obj){
                $image =  Helpers::uploadImage($imageObj[$key],$storePath);
                $image_url = $image['data']['image_url'];
                $siteMeta = SiteMeta::where('meta_key', $key)->first();
                if($siteMeta !== null){
                    SiteMeta::where('meta_key',$key)->update(['meta_value'=>$image_url]);
                }
            }
        }else{
            foreach($request->all() as $key => $val ){
                $siteMeta = SiteMeta::where('meta_key', $key)->first();
               
                if($siteMeta !== null){
                    SiteMeta::where('meta_key',$key)->update(['meta_value'=>$val]);
                }else{
                    continue;
                }
            }
        }
        
        return redirect()->back()->with('success','site information is updated succesfully !!');
    }
}
