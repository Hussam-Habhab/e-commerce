<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $product->get();
        // $product = Product::class->get();
        return view('admin.products.index',['products' => Product::with('category')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
    //Retrieve a portion of the validated input data..., just good to know (Note)
    // $validated = $request->safe()->only(['name', 'email']);
    // $validated = $request->safe()->except(['name', 'email']);
    if (auth()->user()->hasRole('admin')) {
        $product=Product::make($data);
        $product->category_id = $request->input('category_id'); 
        $product->save();

        // dd($product);
    }
        
        return redirect()->route('products.index')->with('success','Product added successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request,Product $product)
    {
        // $data = $request->validated();
        // dd('hi');
    
    if (auth()->user()->hasRole('admin')) {

        $product->update($request->validated());
        // $product=Product::make($data);
        // $product->category_id = $request->input('category_id'); 
        // $product->save();
        // $product->category_id = $request->input('category'); 
        // $product->save();

        // dd($product);
    }
        
        return redirect()->route('products.index')->with('success','Product added successfully !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success','product was successfully deleted !');
    }
}
