<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use App\Article;

class ArticlesApiController extends Controller
{
    public $successStatus = 200;
    /** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function articles() 
    { 
        $articles = Article::all(); 
        return response()->json(['success' => $articles], $this-> successStatus); 
    } 
}
