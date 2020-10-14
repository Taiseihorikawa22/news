<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeywordsController extends Controller
{
    public function index() {
        
        if (\Auth::check()) { // 認証済みの場合
            // 認証済みユーザを取得
            $user = \Auth::user();
            
             // ユーザのキーワードの一覧を取得
            $keywords = $user->keywords()->get();
        }

           return view('news.keywords', [
                'keywords' => $keywords,
           ]);
         
        
    }
     
    public function store(Request $request){
        if($request->keyword === null){
            return back();
        }else{
           
           // 認証済みユーザ（閲覧者）の投稿として作成（リクエストされた値をもとに作成）
            $request->user()->keywords()->create([
            'keyword' => $request->keyword,
             ]);

        // 前のURLへリダイレクトさせる
            return back();
           
        }
 
        
    }
    
    public function destroy($id){
        // idの値で投稿を検索して取得
        $keyword = \App\Keyword::findOrFail($id);

        // 認証済みユーザ（閲覧者）がその投稿の所有者である場合は、投稿を削除
        if (\Auth::id() === $keyword->user_id) {
            $keyword->delete();
        }

        // 前のURLへリダイレクトさせる
        return back();
    }
}
