<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index(Request $request)
    {
        $areas = Area::all();

        $response = [];

        foreach ($areas as $area) {
            $entry = [];
            $products = $area->products;


            foreach ($products as $product) {
                $product = $product->images;
            }

            $entry['department'] = $area->name;
            $entry['image'] = $area->image;
            $entry['currentRoute'] = $area->route;
            $entry['discount'] = $area->discount;
            $entry['items'] = $products;

            array_push($response, $entry);
        }

        return response()->json($response);
    }

    public function show(Request $request, $id)
    {
        $area = Area::find($id);
        $products = Area::find($id)->products;

        foreach ($products as $product) {
            $product = $product->images;
        }
        $response['department'] = $area->name;
        $response['currentRoute'] = $area->route;
        $response['items'] = $products;

        return response()->json($response);
    }
}
