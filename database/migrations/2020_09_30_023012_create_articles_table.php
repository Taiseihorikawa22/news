<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title')->nullable()->collation('utf8_unicode_ci');
             $table->text('description')->nullable()->collation('utf8_unicode_ci');
            $table->string('author')->nullable();
            $table->string('url')->nullable();
            $table->string('urlToImage')->nullable();
            $table->string('publishedAt')->nullable();
            $table->string('content')->nullable();
    
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
