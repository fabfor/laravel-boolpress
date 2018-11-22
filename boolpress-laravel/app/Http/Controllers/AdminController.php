<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function posts(){

      return view('backoffice.posts', ['posts'=>Post::all()]);
    }

    public function postEdit(Request $request, Post $post){

      if ($request->isMethod('get')) {

        return view('backoffice.post_edit', ['post'=>$post]);
      }
      else {
        $data = $request->all();
        $post->fill($data);

        if ($data['post_type'] == 'hot_post'){
          DB::table('posts')
            ->where('type', 'hot_post')
            ->update(['type' => 'normal']);

          $post->type = 'hot_post';
        }

        $post->save();

        return redirect()->route('admin.posts');
      }
    }
}
