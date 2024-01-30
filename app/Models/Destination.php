<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = "destinations";

    public function bannerMedia()
    {
        return $this->belongsTo(Media::class, 'banner_media');
    }

    // Define the relationship to the Media model for the gallery media
    public function galleryMedia()
    {
        return $this->belongsToMany(Media::class, 'destination_gallery', 'destination_id', 'media_id');
    }

}
