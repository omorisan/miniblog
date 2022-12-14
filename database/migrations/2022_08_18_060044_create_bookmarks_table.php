<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->id();
            //$table->bigInteger('user_id')->unsigned();
            $table->uuid('user_id');
            $table->bigInteger('article_id');
            $table->timestamps();

            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //$table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
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
        Schema::dropIfExists('bookmarks');
    }
}
