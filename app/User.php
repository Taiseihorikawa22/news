<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\DB;
use App\Favorite;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     public function loadRelationshipCounts()
    {
        $this->loadCount('keywords');
    }
    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }
    public function favorites(){
        return $this->belongsToMany(Article::class, 'favorites', 'user_id', 'article_id')->withTimestamps()->withPivot('pin');
    }
    
    public function isFavoriting($article_id)
    {
        // お気に入りのニュースの中に $article_idのものが存在するか
        return $this->favorites()->where('article_id', $article_id)->first();
          
      
    }

    public function favorite($article_id)
    {
        // すでにお気に入り追加しているかの確認
        $exist = $this->isFavoriting($article_id);
        if ($exist) {
            // すでにお気に入り追加していれば何もしない
            return false;
        } else {
            // 未追加であれば追加する
            $this->favorites()->attach($article_id);
            return true;
        }
    }
    public function unfavorite($article_id)
    {
        // すでに追加しているかの確認
        $exist = $this->isFavoriting($article_id);
        

        if ($exist) {
            // すでに追加していれば削除する
            $this->favorites()->detach($article_id);    
            return true;
        } else {
            // 未追加であれば何もしない
            return false;
        }
    }
   
   
    public function pin($articleId){
        $pin = $this->favorites()->where('article_id', $articleId)->first()->pivot->pin;
      if($pin === 1){
          //1ならなにもしない
      }else{
          
          //0ならピン止めする 
          $this->favorites()->updateExistingPivot($articleId, ['pin' => 1]);
      }
    }

   
  
  
    public function unpin($articleId){
        $pin = $this->favorites()->where('article_id', $articleId)->first()->pivot->pin;
      if($pin === 1){
          //1ならピン止め解除
          $this->favorites()->updateExistingPivot($articleId, ['pin' => 0]);
      }else{
          //0ならなにもしない
          
      }
  }
  
      
      
      
      
    
}
