<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class WelcomeController extends Controller
{
    public function index(){
        $header1 = Article::orderByDesc('id')->first();
        $header2 = Article::inRandomOrder()->limit(2)->get();
        $footer = Article::limit(6)->get();
        $body = Article::orderByDesc('id')->paginate(8);
        return view('welcome',compact('header1','body','header2','footer'));
    }

    public function cartegory($cartegory){
        $title = Article::where('cartegory', '=', $cartegory)->get();
        $cart = $cartegory;
        // $articles = Article::findOrFail($cartegory);
        return view('cartegory',compact('title','cart'));
    }

    public function single($id)
    {
        $articles = Article::findOrFail($id);
        return view('single_post', compact('articles'));
    }
}
