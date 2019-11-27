<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class UploadService
{
    public function uploadImage($image, $path)
    {
        if (!Storage::exists('public/' . $path)) {
            Storage::makeDirectory('public/' . $path, 0775, true);
        }
        $imageName = time().'.'.$image->getClientOriginalExtension();
        if (!Storage::disk('public')->exists($path . '/' . $imageName)) {
            Storage::disk('public')->putFileAs($path, $image, $imageName);
        }
        return $imageName;
    }
}
