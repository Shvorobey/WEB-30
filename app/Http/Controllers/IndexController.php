<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function __invoke(){
       $posts = Post::all();
       $to_front = [];
       $to_front['posts'] = $posts;
       return view('home', $to_front);
   }
}
