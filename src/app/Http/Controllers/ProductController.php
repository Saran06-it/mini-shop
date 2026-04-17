<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function index()
{
    $products = Product::all();
    return view('products.index', compact('products'));
}


    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        Product::create($data);

        return redirect('/products');
    }
    public function create()
{
    return view('products.create');
}
}
