<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Request $request, $id)
    {
        $product = Product::find($id);

        $product['images'] = $product->images;

        return response()->json($product);
    }
}
