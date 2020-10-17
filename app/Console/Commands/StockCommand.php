<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Article; 
use App\DB;

class StockCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:stock';

    /**
     * The console command description.

     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $categories = array('business','entertainment', 'health', 'technology','general','science','sports');
  foreach($categories as $category){
    //カテゴリをパラメーターに追加してurlを生成
      $client = new \GuzzleHttp\Client( [
   ]);
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
   
      
   
    }
    
}
