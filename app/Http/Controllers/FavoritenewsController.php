<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\User;

class FavoritenewsController extends Controller
{
    public function index(){
       
       // idの値でユーザを検索して取得
        $user = \Auth::user();
        
        $articles = $user->favorites()->orderBy('pin','desc')->orderBy('updated_at','desc')->paginate(10);
       


        //dd('favorites()->article_id');

        return view('news.favoritenews', [
                      'articles' => $articles
        ]);
    
       
    }
        
        
        
    
    public function favoritestore($id){
        \Auth::user()->favorite($id);
        return back();
    }
        
        
        
    
    public function favoritedestroy($id){
        // idの値で投稿を検索して取得
        \Auth::user()->unfavorite($id);

      
        return back();
    }
        
        
        
        
        
    
    public function pinstore($articleId)
    { //$pinには、articlesテーブルの対象のidが入る
        \Auth::user()->pin($articleId);
       
        return back();
    }
        
    public function pindestroy($pin) {
        \Auth::user()->unpin($pin);
        return back();
    }
   
}
