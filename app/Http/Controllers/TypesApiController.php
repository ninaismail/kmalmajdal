<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use App\Models\Product;

class TypesApiController extends Controller
{
    public function index()
    {
        return Type::with("products")->get();
    }
    public function store()
    {
        request()->validate([
            'name' => 'required',
            'href' => 'required',
        ]);

        return Type::create([
            'name' => request('name'),
            'href' => request('href'),
        ]);
    }

    public function update(Type $type)
    {
        request()->validate([
            'name' => 'required',
            'href' => 'required',
        ]);

        $success = $type->update([
            'name' => request('name'),
            'href' => request('href'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Type $type)
    {
        $success = $type->delete();

        return [
            'success' => $success
        ];
    }
    public function getType($id)
    {
        $type = Type::find($id);
        return $type;
    }  
}