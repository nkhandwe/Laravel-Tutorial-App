<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
     return view('admin-views.category.index');
    }

    public function list(){
        $category = Category::all();
        return view('admin-views.category.list', compact('category'));
    }
   
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

    public function update(Request $request, string $id)
    {
        return view('admin-views.category.edit');
    }

    public function destroy(string $id)
    {
          $category = Category::find($id);
          $category->delete();
          return redirect()->back();
    }
}
