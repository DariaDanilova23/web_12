<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __constructor(){
    }
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function news(){
        $newspage = Blog::paginate(1);
        return view('news',['news'=>$newspage]);
    }
}
