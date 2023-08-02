<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    
    public function index()
    {
        $category = Category::all();
        return view('admin-views.sub-category.index', compact('category'));
    }

   
    public function create(Request $request)
    {
        $subcate = new SubCategory();
        $subcate->name = $request->name;
        $subcate->category_id = $request->category_id;
        $subcate->slug = $request->slug;
        $image = time() . 'image' . '.' . $request->image->extension();
        $request->image->move(public_path('sub-category'), $image);
        $subcate->image = $image;
        $result = $subcate->save();
        if($result){
            return redirect(route('admin.sub-category.list'));
        }else{ 
            
        }


    }
    public function list(){
        $subcate = SubCategory::with('category')->get();
        return view('admin-views.sub-category.list', compact('subcate'));
    }

    
    public function update(Request $request, string $id)
    {
        return view('admin-views.sub-category.edit');
    }

   
    public function destroy(string $id)
    {
        $subcate = SubCategory::find($id);
        $subcate->delete();
        return redirect()->back();
    }
}
