<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
    // récupération des posts de l'utilisateur connecté 
    $posts = auth()->user()->posts()->get();       
     //   dd($posts);
        return view('post',compact('posts'));
    }  
    
}

