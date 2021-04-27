<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\LikeDislike;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post',compact('posts'));
    }

    public function details($id){
        $post_details = Post::find($id);
        return view('post-details',compact('post_details'));
    }

    // Save Like Or dislike
    function save_likedislike(Request $request){
        $data=new LikeDislike;
        $data->post_id=$request->post;
        if($request->type=='like'){
            $data->like=1;
        }else{
            $data->dislike=1;
        }
        $data->save();
        return response()->json([
            'bool'=>true
        ]);
    }
}
