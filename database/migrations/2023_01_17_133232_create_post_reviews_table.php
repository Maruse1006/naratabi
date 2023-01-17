<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id')->default(0)->comment('商品ID');
            $table->unsignedBigInteger('user_id')->default(0)->comment('ユーザーID');
            $table->integer('stars')->default(0)->comment('星');
            $table->text('comment')->comment('コメント');
            $table->timestamps();
    
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unique(['post_id', 'user_id']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('=post_reviews_table');
    }
}
