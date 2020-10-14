<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use DB;
class KeywordnewsController extends Controller
{
        
   
    public function index() {
        //自分が登録しておいたキーワードでニュースをデータベースから検索かけて表示するものです。
        $user = \Auth::user();
        $keywords = $user->keywords()->get();
            //dd($keywords);
        if(count($keywords) === 0){
            
            $articles = [];
            
        }else{
            $query = DB::table('articles');
            foreach($keywords as $keyword) {
                $query->orWhere('title', 'LIKE', '%' . $keyword->keyword . '%');
                $query->orWhere('description', 'LIKE', '%' . $keyword->keyword . '%');
            }
        $articles = $query->get();
        }
        
       
                      
            //dd($articles);
             
        return view('news.keywordnews', [
            'articles' => $articles
        ]);
    }
            
}





