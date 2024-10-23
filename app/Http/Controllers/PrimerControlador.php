<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
        $posts = ['post1','post2'];
        //return view('test', ['posts'=>$posts,]);
        return view('test', compact('posts'));
    }

    function otro($post=40, $otro=50) {
        echo $post;
        echo $otro;
    }
   
}
