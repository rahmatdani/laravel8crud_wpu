<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function home(){
        return view('home', [
        "title" => "Home"
    ]);
    }

    public function donasi(){
        return view('donasi', [
        "title" => "Donasi"
    ]);
    }

    public function index(){
        return view('blog', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
    }

    public function view($slug){
        return view('post', [
        "title" => "single Post",
        "post" => Post::find($slug)
    ]);
    }

    public function about(){
        return view('about', [
        "title" => "About",
        "name" => "Rahmat dani",
        "alamat" => "jalan kacong dg lalang",
        "image" => "dani.jpg"
    ]);
    }
}

