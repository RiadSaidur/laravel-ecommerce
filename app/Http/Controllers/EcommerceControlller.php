<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class EcommerceControlller extends Controller
{
    public function home() {
        $products = Product::getPublishedProducts();
        return view('frontend.home.home', [
            'products' => $products
        ]);
    }

    public function singleProduct($id) {
        $product = Product::getPublishedSingleProduct($id);
        return view('frontend.product.singleProduct', [
            'product' => $product
        ]);
    }
}
