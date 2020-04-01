<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('caption')->nullable();
            $table->string('description')->nullable();
            $table->string('tags')->nullable();
            $table->string('body')->nullable();
            $table->string('img')->nullable();
            $table->string('auther')->nullable();
            $table->string('source')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('post_type_id')->nullable();
            $table->integer('special_post_id')->nullable();
            $table->boolean('is_active');
            $table->boolean('is_featured');
            $table->boolean('is_news_crasoul');
            $table->boolean('is_news_breaknews');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
