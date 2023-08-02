<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posts;
use App\Models\SubCategory;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $category  = Category::all();
        $subcate = SubCategory::all();
        $topic = Topic::all();
        return view('admin-views.posts.index', compact('category', 'subcate', 'topic'));
    }

  
    public function create(Request $request)
    {
        $post = new Posts();
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->topic_id = $request->topic_id;
        $image = time() . 'image' . '.' . $request->image->extension();
        $request->image->move(public_path('post'), $image);
        $post->image = $image;
        $result =  $post->save();
        if($result){
            return redirect(route('admin.post.list'));
        }else{

        }
    }
    public function list(){
        $post = Posts::with('category', 'subcategory', 'topic')->get();
        return view('admin-views.posts.list', compact('post'));
    }
    public function update(Request $request, string $id)
    {
        return view('admin-views.posts.edit');
    }

   
    public function destroy(string $id)
    {
        $post = Posts::find($id);
        $post->delete();
        return redirect()->back();
    }
}
