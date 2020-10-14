<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('user_id');
            $table->boolean('pin')->default(0);
            
             $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('article_id')->references('id')->on('articles');
         
         
         
         
           $table->unique(['user_id', 'article_id']);
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
