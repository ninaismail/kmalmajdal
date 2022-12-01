<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\Invoice;

class ProductsApiController extends Controller
{
  public function index(Category $category)
  {
    return response()->json($category->products()->with("type")->get());
  }
  public function indextype(Type $type)
  {
    return response()->json($type->products()->get());
  }
  public function indexinvoice(Invoice $invoice)
  {
    return response()->json($invoice->products()->get());
  }
  public function indexwithoutcategory()
  {
    return Product::with("type")->get();
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