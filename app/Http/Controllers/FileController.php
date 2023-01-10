<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    private const BASE_DIR = 'assets/';
    private const IMAGE_DIR = 'images/';

    public static function saveImage($image) {
        if (!$image) return null;

        $imageExt = $image->getClientOriginalExtension();
        $imageName = rand(0, 99999) . '.' . $imageExt;
        $image->move(self::BASE_DIR . self::IMAGE_DIR, $imageName);

        return self::IMAGE_DIR . $imageName;
    }

    public static function deleteImage($image) {
        if(file_exists(self::BASE_DIR . $image)) {
            unlink(self::BASE_DIR . $image);
        }
    }
}
