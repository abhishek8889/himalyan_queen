<?php

namespace App\Http\Controllers\CentralLogics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Helpers extends Controller
{
    public static function uploadImage($media_obj,$storePath){
        try{
            $imageName = time() . '.' . $media_obj->extension();
            $saveObj=  $media_obj->storeAs('public/'.$storePath, $imageName);
        
            $imageUrl = 'storage/'.$storePath.'/'.$imageName;
            $directoryPath = 'storage/'.$storePath;
            return array('status' => true,'data' => ['image_url' => $imageUrl , 'directory_path' => $directoryPath]);
        }catch(\Exception $e){
            return array('status'=> false,'message' => $e->getMessage());
        }
    }
}
