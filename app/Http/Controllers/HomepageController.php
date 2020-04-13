<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\TvSchedule;
use Str;

class HomepageController extends Controller
{

    public function loadmore(Request $request)
    {
        $allposts = Posts::paginate(5);
     


    	if ($request->ajax()) {
    		$view = view('loadmoredate',compact('allposts'))->render();
            return response()->json(['html'=>$view]);
        }


    	return view('loadmore',compact('allposts'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Posts::orderBy('id', 'DESC')->take(4)->skip(1)->limit(3)->get();
        $first = Posts::orderBy('id', 'DESC')->take(1)->get();
        $allposts =  Posts::orderBy('id', 'DESC')->get();
        $activity =  Posts::orderBy('visit_count', 'DESC')->get();
        $now =  TvSchedule::all();
        return view('homepage', compact('categories', 'posts', 'first', 'allposts', 'activity', 'now'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$slug)
    {
        $post = Posts::where('id', $id)->where('slug', $slug)->first();


       $idd = $id;
        return view('showpost', compact('post','idd'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Posts::find($id);
        $visitCount = $request->visitCount;
        $post->visit_count = $visitCount;
        $post->save();
        // return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showcat($slug)
    {
        $category = Category::with('posts')->get()->where('slug', 'like', $slug);

        $posts = Posts::orderBy('id', 'desc')->whereHas('category', function ($query) use ($slug) {
                $query->where('slug', 'like', $slug);
            })->paginate(5);

        // return view
        return view('showcat')->withPosts($posts)->with('category', $category);
    }
}
