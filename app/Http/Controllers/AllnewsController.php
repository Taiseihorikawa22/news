<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article; 
use App\Favorite;

class AllnewsController extends Controller
{
    
    public function index() {
        
        $articles = Article::orderBy('id','desc')->get();
             
        return view('news.allnews', [
            'articles' => $articles
        ]);
        
       
        $this->stock();
    }

    private function stock() {
        $categories = array('business','entertainment', 'health', 'technology','general','science','sports');
        foreach($categories as $category){
            //カテゴリをパラメーターに追加してurlを生成
            $client = new \GuzzleHttp\Client( []);
            $url ='https://newsapi.org/v2/top-headlines?country=jp&apiKey=3200549c123c47bbbb349a3b0f925cfa&category='  . $category;
            $records = $client->request('GET',$url, ['allow_redirects' => true,] );
            $records_code = (string) $records->getStatusCode();
            $records_body = (string) $records->getBody();
            $records = json_decode($records_body);
            $articles = $records->articles;
   
            foreach($articles as $article){    
                $record = new Article;
                if(Article::where('url', $article->url)->exists()){
                    continue;
                } 
                $record->author = $article -> author;
                $record->title = $article -> title; 
                $record->description = $article -> description;
                $record->url = $article -> url;
                $record->urlToImage = $article ->urlToImage;
                $record ->publishedAt = $article -> publishedAt;
                $record->content = $article ->content;
                try {
                    $record->save();
                } catch (\Exception $e) {
                // nothing to do.
                }

            }

// dd($articles);
        }


        $favorites = Favorite::select('article_id')->groupBy('article_id')->pluck('article_id');
        if($favorites->count() >0){
            $query = Article::whereNotIn('id',$favorites);
            $query->where('created_at', '<=', date('Y-m-d H:i:s', time() - 60*60*24*14))->delete();
        }
    }
    
    
}



       
            
    
   



