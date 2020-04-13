<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Posts;
use App\User;
use App\Auth;
use App\Notifications\PostCreated;
use Str;
use Session;
use Notification;
use App\Events\PostEvent;


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
        return view('admin.posts.index', compact('users', 'posts'));
    }


    public function create()
    {
        $categories = Category::all();
        $posts = Posts::all();
        return view('admin.posts.create', compact('categories', 'posts'));
    }


    public function store(Request $request, Posts $posts)
    {


        // $validator = Validator::make($request->all(), [
        //     'img' => 'mimes:jpeg,bmp,png|required|max:10000',
        //     'title' => 'required|unique:posts|max:255',
        //     'body' => 'required',
        //     'category_id' => 'required',
        //     'description' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     \Session::flash('message', 'من فضلك عليك اختيار صورة مناسبة بحجم أقل من ٢ ميجا');
        //     \Session::flash('alert-class', 'alert-warning');
        //     return redirect()->back()->withErrors($validator)
        //         ->withInput();;
        // }



        // print_r($request->is_active);
        // exit();
        if ($request->img->getClientOriginalExtension()) {



            $ext = $request->img->getClientOriginalExtension();
            $file = date('YmdHis') . rand(1, 9999) . '.' . $ext;
            $request->img->storeAs('public/images', $file);
        } else {
            $file = '';
        }
        $posts->img = $file;

        $is_active = 0;
        if ($request->is_active == 'on') {
            $is_active = 1;
        } else {
            $is_active = 0;
        }

        $is_featured = 0;
        if ($request->is_featured == 'on') {
            $is_featured = 1;
        } else {
            $is_featured = 0;
        }

        $is_news_crasoul = 0;
        if ($request->is_news_crasoul == 'on') {
            $is_news_crasoul = 1;
        } else {
            $is_news_crasoul = 0;
        }

        $is_featured = 0;
        if ($request->is_featured == 'on') {
            $is_featured = 1;
        } else {
            $is_featured = 0;
        }

        $is_news_breaknews = 0;
        if ($request->is_news_breaknews == 'on') {
            $is_news_breaknews = 1;
        } else {
            $is_news_breaknews = 0;
        }


        $bad_words = array('a', 'and', 'the', 'an', 'it', 'is', 'with', 'can', 'of', 'why', 'not', 'و', 'أو');

        $posts->title =  $request->title;
        $posts->body =  $request->body;
        $posts->caption =  $request->caption;
        $posts->description =  $request->description;
        //$posts->tags =  $request->tags;
        $posts->user_id =  $request->user_id;
        $posts->source =  $request->source;
        $posts->category_id =  $request->category_id;
        $posts->slug =  generate_seo_link($request->title, '-', true, $bad_words);
        $posts->post_type_id =  $request->post_type_id;
        $posts->special_post_id =  $request->special_post_id;
        $posts->is_active =  $is_active;
        $posts->is_featured =  $is_featured;
        $posts->is_news_crasoul =  $is_news_crasoul;
        $posts->is_news_breaknews =  $is_news_breaknews;


        $posts->save();
        $users = User::find(1);
        // Notification::send($users, new PostCreated());
        // User::find(1)->notify(new PostCreated);
        event(new PostEvent($posts));

        return redirect()->route('admin.posts.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Posts $post)
    {
        $arr['post'] = $post;
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories', 'post'));
    }


    public function update(Request $request, Posts $post)
    {
        $is_active = 0;
        if ($request->is_active == 'on') {
            $is_active = 1;
        } else {
            $is_active = 0;
        }

        $is_featured = 0;
        if ($request->is_featured == 'on') {
            $is_featured = 1;
        } else {
            $is_featured = 0;
        }

        $is_news_crasoul = 0;
        if ($request->is_news_crasoul == 'on') {
            $is_news_crasoul = 1;
        } else {
            $is_news_crasoul = 0;
        }

        $is_featured = 0;
        if ($request->is_featured == 'on') {
            $is_featured = 1;
        } else {
            $is_featured = 0;
        }

        $is_news_breaknews = 0;
        if ($request->is_news_breaknews == 'on') {
            $is_news_breaknews = 1;
        } else {
            $is_news_breaknews = 0;
        }

        $bad_words = array('a', 'and', 'the', 'an', 'it', 'is', 'with', 'can', 'of', 'why', 'not', 'و', 'أو');

        if (isset($request->img) && $request->img->getClientOriginalName()) {
            $ext =  $request->img->getClientOriginalExtension();
            $file = date('YmdHis') . rand(1, 99999) . '.' . $ext;
            $request->img->storeAs('public/images', $file);
        } else {
            if (!$post->img)
                $file = '';
            else
                $file = $post->img;
        }

        $post->title =  $request->title;
        $post->body =  $request->body;
        $post->caption =  $request->caption;
        $post->description =  $request->description;
        $post->img = $file;
        $post->tags =  $request->tags;
        $post->user_id =  $request->user_id;
        $post->source =  $request->source;
        $post->category_id =  $request->category_id;
        $post->slug =  generate_seo_link($request->title, '-', true, $bad_words);
        $post->post_type_id =  $request->post_type_id;
        $post->special_post_id =  $request->special_post_id;
        $post->is_active =  $is_active;
        $post->is_featured =  $is_featured;
        $post->is_news_crasoul =  $is_news_crasoul;
        $post->is_news_breaknews =  $is_news_breaknews;


        $post->save();
        return redirect()->route('admin.posts.index');
    }


    public function destroy($slug)
    {
        Posts::destroy($slug);
        return redirect()->route('admin.posts.index')->with('message', 'لقد تم حذف البوست بنجاح');
    }
}




/* أخذ العنوان المدخل والكلمات الغير مفيدة */
function generate_seo_link($input, $replace = '-', $remove_words = true, $words_array = array())
{
    //تصغير الحروف وإزالة المسافات وعلامات الترقيم
    $return = trim(preg_replace('/ +/', ' ', preg_replace('/[^a-zA-Z\p{Arabic}0-9\s]/u', '', mb_strtolower($input))));

    //إزالة الكلمات الغير مفيدة
    //ستعمل فقط إذا أدخلت الكلمات في المصفوفة
    if ($remove_words) {
        $return = remove_words($return, $replace, $words_array);
    }

    //استبدال المساحة 
    //عادة تكون إما - شخطة أو _ شخط سفلية
    //...إرجاع القيمة
    return str_replace(' ', $replace, $return);
}

/* سيتم أخذ الكلامات الغير مفيدة */
function remove_words($input, $replace, $words_array = array(), $unique_words = true)
{
    //فصل الكلمات بالمساحات
    $input_array = explode(' ', $input);

    //إنشاء المصفوفة التي سترجع
    $return = array();

    //حلقة لإزالة الكلمات الغير مفيدة من العنوان
    foreach ($input_array as $word) {
        //الكلمات ستضافة إلى المصفوفة...
        if (!in_array($word, $words_array) && ($unique_words ? !in_array($word, $return) : true)) {
            $return[] = $word;
        }
    }

    //إعادة الكلمات المفيدة مفصولة بشخطة أو الشيء الذي حددته
    return implode($replace, $return);
}
