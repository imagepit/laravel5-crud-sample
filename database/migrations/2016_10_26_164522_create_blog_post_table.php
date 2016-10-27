<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // テーブル名
        Schema::create('blog_post', function (Blueprint $table) {
            // カラム定義
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->timestamps(); // create_ad and update_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // テーブル削除
        Schema::drop('blog_post');
    }
}
