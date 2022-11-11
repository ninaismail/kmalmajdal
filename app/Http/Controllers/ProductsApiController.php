<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductsApiController extends Controller
{
  public function index(Category $category)
  {
    return response()->json($category->products()->get());
  }

  public function store(Request $request, Category $category)
  {
    $product = $category->products()->create([
      'title' => $request->title,
      'description' => $request->description,
      'href' => $request->href,
      'image' => $request->image,
      'price' => $request->price,
    ]);

    return $product->toJson();
  }
}