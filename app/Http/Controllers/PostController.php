<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
class PostController extends Controller
{
    public function single_post($id){
        $count = '1';

        DB::table('posts')
        ->where('id', $id)
        ->increment('views', $count); 
        
    	$latest_posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*', 'users.first_name as uname')
        ->where('posts.id', $id)
        ->first(); 

        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*', 'users.first_name as uname')
        ->paginate(6); 

         $post_tag = DB::table('post_tag')
        ->join('posts', 'posts.id', '=', 'post_tag.post_id')
        ->join('tags', 'tags.id', '=', 'post_tag.tag_id')
        ->select('post_tag.*','tags.name as tname', 'posts.*')
        ->where('posts.id',$id)
        ->get();

        $tags = DB::table('tags')->get(); $categories = DB::table('categories')->get(); 
        $categories = DB::table('categories')->get(); $categories = DB::table('categories')->get();


    	return view('single_post', compact('latest_posts', 'tags', 'categories', 'posts', 'post_tag'));
    }
    public function by_category_post ($id){

        $latest_posts = DB::table('post_category')
        ->join('posts', 'posts.id', '=', 'post_category.post_id')
        ->join('categories', 'categories.id', '=', 'post_category.category_id')
        ->select('post_category.*', 'posts.*','categories.name as cname')
        ->where('post_category.category_id',$id)
        ->paginate(9);

        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*', 'users.first_name as uname')
        ->paginate(6); 

        $tags = DB::table('tags')->get(); $categories = DB::table('categories')->get(); 
        $categories = DB::table('categories')->get(); 


        return view('post_by_category', compact('latest_posts', 'tags', 'categories', 'posts'));
    }

    public function by_tag_post ($id){

        $latest_posts = DB::table('post_tag')
        ->join('posts', 'posts.id', '=', 'post_tag.post_id')
        ->select('post_tag.*', 'posts.*')
        ->where('post_tag.tag_id',$id)
        ->paginate(9);

        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*', 'users.first_name as uname')
        ->paginate(6); 

        $tags = DB::table('tags')->get(); $categories = DB::table('categories')->get(); 
        $categories = DB::table('categories')->get(); 


        return view('post_by_tag', compact('latest_posts', 'tags', 'categories', 'posts'));
    }
    public function ads_form(){
         $data = DB::table('ads')->get();
        return view('ads_form', compact('data'));
    }

    public function ads_submit(Request $request){
        $rules = array(
        'ads'             => 'required',                        // just a normal required 
    );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
        $messages = $validator->messages();

        return Redirect::to('insert/ads')
            ->withErrors($validator);

    } else {

        $data =  array( );
        $data['ads'] = $request->ads;
        $data['position'] = $request->position;

        DB::table('ads')->insert($data);

        return back()->with('success', 'Ads has been published');
        }
    }
    public function ads_edit(Request $request){


        DB::table('ads')->where('id', $request->id)->update([
            'ads'=>$request->ads,
            'position'=>$request->position,
        ]);

        return back()->with('success', 'Ads has been published');
        
    }

    public function search(Request $request){
        $queryString = $request->search;

        if ($queryString != null) {
           
            $builder= DB::table('posts')
            ->where('name', 'LIKE', "%$queryString%")
            // ->orWhere('description', 'LIKE', "%$queryString%")
            // ->orWhere('content', 'LIKE', "%$queryString%")
            ->orderBy('name')->paginate(9);
        }
        $posts = DB::table('posts')
        ->join('users', 'users.id', '=', 'posts.user_id')
        ->select('posts.*', 'users.first_name as uname')
        ->paginate(6); 

        $tags = DB::table('tags')->get(); $categories = DB::table('categories')->get(); 
        $categories = DB::table('categories')->get(); 

        return view('search_result', compact('builder', 'posts', 'tags', 'categories')); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        DB::table('subscribers')->insert([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
