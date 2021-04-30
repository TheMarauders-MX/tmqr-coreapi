<?php

namespace App\Http\Controllers;

use App\Models\Area;
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

    public function find(Request $request, $term)
    {
        $options = [];

        switch (true) {
            case stristr($term, 'screen'):
            case stristr($term, 'display'):
            case stristr($term, 'tv'):
                $options = Area::find(1)->products;
                break;

            case stristr($term, 'watch'):
            case stristr($term, 'clock'):
                $options = Area::find(2)->products;
                break;

            case stristr($term, 'backpack'):
            case stristr($term, 'rucksack'):
                $options = Area::find(3)->products;
                break;

            case stristr($term, 'mattress'):
                $options = Area::find(4)->products;
                break;

            case stristr($term, 'bicycle'):
            case stristr($term, 'bike'):
                $options = Area::find(5)->products;
                break;

            case stristr($term, 'cell'):
            case stristr($term, 'mobile'):
            case stristr($term, 'phone'):
                $options = Area::find(6)->products;
                break;

            case stristr($term, 'sofa'):
            case stristr($term, 'couch'):
                $options = Area::find(7)->products;
                break;

            case stristr($term, 'bag'):
            case stristr($term, 'handbag'):
            case stristr($term, 'clutch'):
            case stristr($term, 'purse'):
                $options = Area::find(8)->products;
                break;

            case stristr($term, 'motorbike'):
            case stristr($term, 'motorcycle'):
                $options = Area::find(9)->products;
                break;

            case stristr($term, 'suitcase'):
                $options = Area::find(10)->products;
                break;
            case stristr($term, 'tie'):
            case stristr($term, 'necktie'):
            case stristr($term, 'cravate'):
            case stristr($term, 'cravat'):
                $options = Area::find(11)->products;
                break;

            case stristr($term, 'umbrella'):
                $options = Area::find(12)->products;
                break;
        }

        $product = $options[0];
        $product['images'] = $product->images;

        return response()->json($product);
    }
}
