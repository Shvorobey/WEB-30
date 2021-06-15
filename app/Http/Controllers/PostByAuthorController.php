<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class PostByAuthorController extends Controller
{
    public function __invoke($key)
    {
        $author = Author::where('key', '=', $key)->first();

        $choose_color = [
          'aaaa' => 'green',
          'bbbb' => 'yelow'
        ];
    $color = $choose_color[$post->series];

        return view('posts_by_author', ['author' => $author, 'color'=>$color]);
    }
}
