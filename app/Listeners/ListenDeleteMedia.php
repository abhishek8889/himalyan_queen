<?php

namespace App\Listeners;

use App\Events\DeleteMedia;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Media;
use Illuminate\Support\Facades\File; 
use Illuminate\Support\Facades\Storage;

class ListenDeleteMedia
{
    /**
     * Create the event listener.
     */

    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(DeleteMedia $event): void
    {
        if(isset($event->media_id) && is_array($event->media_id)){
            $media_id = $event->media_id;
            // dd($media_id);
            foreach($media_id as $id){

                $media = Media::find($id);
                if($media !== null && !empty($media)){
                    $directory_path = $media->directory_path;
                    $image_name = $media->image_name;
                    $file_path = 'public/PackageBanner/'.$image_name;
                    
                    if (Storage::exists($file_path)) {
                        Storage::delete($file_path);
                        $media->delete();
                    } 
                }
            }
        }
    }
}
