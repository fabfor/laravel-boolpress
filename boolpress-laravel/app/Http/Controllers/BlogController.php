<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function index(){
      $posts = Post::where('is_active',1)->where('type','normal')->orderBy('created_at','desc')->take(10)->get();
      $hp =  Post::where('is_active',1)->where('type','hot_post')->first();
      $sp =  Post::where('is_active',1)->where('type','side_post')->get();


      return view('frontoffice.index',[
                            'normal_posts'=> $posts,
                            'hot_post' => $hp,
                            'side_posts' => $sp,
                          ]);
    }

    public function showPost($id){

      return view('frontoffice.post',['p'=>Post::find($id)]);
    }
}
