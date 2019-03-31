<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WelcomeController extends Controller
{
    public function index(){
        $header1 = Article::orderByDesc('id')->first();
        $header2 = Article::inRandomOrder()->limit(2)->get();
        $body = Article::orderByDesc('id')->paginate(8);
        return view('welcome',compact('header1','body','header2'));
    }

    public function cartegory($id){
        $title = Article::find($id);
        $articles = Article::findOrFail($id);
        return view('cartegory',compact('articles','title'));
    }
}
