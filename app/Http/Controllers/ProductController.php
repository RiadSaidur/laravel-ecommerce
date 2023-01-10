<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct() {
        return view('admin.product.add');
    }

    public function saveProduct(Request $request) {
        Product::saveProduct($request);
        
        return redirect(route('admin.add.product'));
    }

    public function manageProduct() {
        $products = Product::all();

        return view('admin.product.manage', [
            'products' => $products
        ]);
    }

    public function updateProduct($id) {
        $product = Product::find($id);

        return view('admin.product.update', [
            'product' => $product
        ]);
    }

    public function saveProductUpdate($id, Request $request) {
        Product::saveProductUpdate($id, $request);
        
        return redirect(route('admin.manage.product'));
    }
}
