<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('admin.category.create',
        ['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->validated();
        // Category::create()->
        // Category::create($data);
        $category = new Category();
        $category->name = $data['name'];
        // $category->parent_id = $data['parent_id'];
        // $category->parent_id = $request->subcategory_id ?? $request->parent_id; // Assign parent or subcategory as the parent
        $category->parent_id = $request->input('category'); 

        $category->save();

        return redirect()->back()->with('success','Category was successfully created !');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
