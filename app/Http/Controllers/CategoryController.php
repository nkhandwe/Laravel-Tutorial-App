<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('admin-views.category.index');
    }

    public function list(){
        $category = Category::all();
        return view('admin-views.category.list', compact('category'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $category = new Category();
        $category->name = $request->name; 
        $category->slug = $request->slug;
        $image = time() . 'image' . '.' . $request->image->extension();
        $request->image->move(public_path('category'), $image);
        $category->image = $image;
        $result = $category->save();
        if($result){
            return redirect(route('admin.category.list'));
        }else{
            
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
