<?php

namespace App\Models;

use App\Http\Controllers\FileController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public static function saveProduct($request) {
        $product = new Product();

        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;
        $product->image = FileController::saveImage($request->image);

        $product->save();
    }

    public static function saveProductUpdate($id, $request) {
        $product = Product::find($id);

        if (!$product) return null;

        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->brand_name = $request->brand_name;
        $product->description = $request->description;

        if($request->file('image')) {
            FileController::deleteImage($product->image);
            $product->image = FileController::saveImage($request->image);
        }        

        $product->save();
    }

    public static function getPublishedProducts() {
        return DB::table('products')
            ->where('status', '=', 1)
            ->select('products.*')
            ->get();
    }

    public static function getPublishedSingleProduct($id) {
        return DB::table('products')
            ->where('status', '=', 1)
            ->where('id', '=', $id)
            ->select('products.*')
            ->first();
    }
}
