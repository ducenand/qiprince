<?php

namespace App\Http\Controllers\Front;

use App\Models\Front\Article;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    protected $article; //用户

    public function __construct(Article $article)
    {
        $this->article=$article;
    }

    public function lists(){
        $data= Article::paginate(15);
        return view('front.article.list',compact('data'));
    }

    public function detail($id){
     $data=Article::where('aid',$id)->first();
     return view('front.article.detail',compact('data'));
    }

    public function addArticle(){
        return view('front.article.add');
    }

    public function create(Request $request){
       $data=Article::create($request->all());
       dd($data);
    }

}
