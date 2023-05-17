<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\DataTables;

use App\Http\Requests\StoreProductRequest;

use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();

        return view('products', compact('categories'));
    }

    /**
     * Return a listing of the resource.
     */
    public function list(Request $request)
    {
        $products = Product::with('category');

        $datatable =  DataTables::of($products)
            ->make(true);

        return $datatable;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index')->withSuccess('Product created successfully!');
    }
}
