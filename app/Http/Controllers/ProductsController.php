<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getAll()
    {
        $products = Product::all();
        return $products->toJson();
    }

    public function getBestSelling()
    {
        $products = Product::query()
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return $products->toJson();
    }

    public function getProduct($product)
    {
        $product = Product::where('slug', $product)
                        ->first();

        if (is_null($product)) {
            $data = [
                'error' => true,
                'message' => 'Product does not exists'
            ];
            return response()->json($data);
        }

        return $product->toJson();
    }

}
