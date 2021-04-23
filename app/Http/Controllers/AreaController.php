<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $areas = Area::all();

        foreach ($areas as $area)
        {
            $area = $area->images;
        }

        return response()->json($areas);
    }

    public function show(Request $request, $id)
    {
        $products = Area::find($id)->products;

        foreach ($products as $product)
        {
            $product = $product->images;
        }
        $products['discount'] = Area::find($id)->discount;

        return response()->json($products);
    }
}
