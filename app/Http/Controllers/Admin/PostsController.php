<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use App\User;
use App\Auth;

use Illuminate\Support\Facades\Validator;

class PostsController extends Controller
{

  
    public function __construct()
    {
        $this->middleware('auth');
    }


   
    public function index()
    {
        $posts = Posts::orderBy('id', 'DESC')->get();
        $users = User::all();
        return view('admin.posts.index', compact('users','posts'));
    }

 
    public function create()
    {
        $categories = Category::all();
            $posts = Posts::all();
        return view('admin.posts.create', compact('categories','posts'));
    }

   
    public function store(Request $request,Posts $posts)
    {
  
       
        // print_r($request->is_active);
        // exit();
        if($request->img->getClientOriginalExtension())
       { 
        
  

        $ext = $request->img->getClientOriginalExtension();
        $file = date('YmdHis').rand(1,9999).'.'.$ext;
        $request->img->storeAs('public/images',$file);
       
       }
       else{
           $file= '';
       }
        $posts->img = $file;

       $is_active =0;
       if ($request->is_active == 'on'){
        $is_active =1;
       }else{
        $is_active =0;
       }

       $is_featured =0;
       if ($request->is_featured == 'on'){
        $is_featured =1;
       }else{
        $is_featured =0;
       }

       $is_news_crasoul =0;
       if ($request->is_news_crasoul == 'on'){
        $is_news_crasoul =1;
       }else{
        $is_news_crasoul =0;
       }

       $is_featured =0;
       if ($request->is_featured == 'on'){
        $is_featured =1;
       }else{
        $is_featured =0;
       }

       $is_news_breaknews =0;
       if ($request->is_news_breaknews == 'on'){
        $is_news_breaknews =1;
       }else{
        $is_news_breaknews =0;
       }
     


        $posts->title =  $request->title;
        $posts->body =  $request->body;
        $posts->caption =  $request->caption;
        $posts->description =  $request->description;
        $posts->tags =  $request->tags;
        $posts->user_id =  $request->user_id;
        $posts->source =  $request->source;
        $posts->category_id =  $request->category_id;
        $posts->post_type_id =  $request->post_type_id;
        $posts->special_post_id =  $request->special_post_id;
        $posts->is_active =  $is_active;
        $posts->is_featured =  $is_featured;
        $posts->is_news_crasoul =  $is_news_crasoul;
        $posts->is_news_breaknews =  $is_news_breaknews;

    
        $posts->save();
        return redirect()->route('admin.posts.index');
    }


    public function show($id)
    {
        //
    }

  
    public function edit(Posts $post )
    {
        $arr['post']= $post;
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories','post'));
    }

 
    public function update(Request $request,Posts $post)
    {
        $post->title =  $request->title;
        $post->description =  $request->description;

        $post->save();
        return redirect()->route('admin.posts.index');
    }

  
    public function destroy($id)
    {
        Posts::destroy($id);
        return redirect()->route('admin.posts.index')->with('message', 'لقد تم حذف البوست بنجاح');
    }
}
