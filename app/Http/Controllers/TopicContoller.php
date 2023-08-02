<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicContoller extends Controller
{
    
    public function index()
    {
        $category = Category::all();
        $subcate = SubCategory::all();
        
        return view('admin-views.topics.index', compact('category', 'subcate'));
    }

    public function list(){
        $topic = Topic::with('category','subcategory')->get();
        return view('admin-views.topics.list', compact('topic'));
    }
    
    public function create(Request $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->category_id = $request->category_id;
        $topic->subcategory_id = $request->subcategory_id;
        $topic->slug = $request->slug;
        $image = time() . 'image' . '.' . $request->image->extension();
        $request->image->move(public_path('topic'), $image);
        $topic->image = $image;
        $result = $topic->save();
        if($result){
        return redirect(route('admin.topic.list'));
        }else{

        }
    }

   
    public function update(Request $request, string $id)
    {
        return view('admin-views.topics.edit');
    }

   
    public function destroy(string $id)
    {
        $topic = Topic::find($id);
        $topic->delete();
        return redirect()->back();
    }
}
