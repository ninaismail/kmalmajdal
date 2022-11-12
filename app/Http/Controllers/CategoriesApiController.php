<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesApiController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'image' => 'required',
            'href' => 'required',
        ]);

        return Category::create([
            'name' => request('name'),
            'image' => request('image'),
            'href' => request('href'),
        ]);
    }

    public function update(Category $category)
    {
        request()->validate([
            'name' => 'required',
            'image' => 'required',
            'href' => 'required',
        ]);

        $success = $category->update([
            'name' => request('name'),
            'image' => request('image'),
            'href' => request('href'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Category $category)
    {
        $success = $category->delete();

        return [
            'success' => $success
        ];
    }
    public function getCategory($id)
    {
        $category = Category::find($id);
        return $category;
    }  
}