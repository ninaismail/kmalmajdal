<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;

class ProductsApiController extends Controller
{
  public function index(Category $category)
  {
    return response()->json($category->products()->get());
  }
  public function indexByType(Type $type)
  {
    return response()->json($type->products()->get());
  }
  public function indexwithoutcategory()
  {
    return Product::all();
  }
  public function store(Request $request, Category $category)
  {
    $product = $category->products()->create([
      'title' => $request->title,
      'description' => $request->description,
      'href' => $request->href,
      'image' => $request->image,
      'image2' => $request->image2,
      'image3' => $request->image3,
      'image4' => $request->image4,
      'price' => $request->price,
    ]);

    return $product->toJson();
  }
  public function getProduct($id)
  {
      $product = Product::find($id);
      return $product;
  }  
}