<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('posts', function (Blueprint $table) {
        $table->foreign('author_id', 'author')
              ->references('id')
              ->on('authors');
      });
      Schema::table('category_post', function (Blueprint $table) {
        $table->foreign('category_id', 'category')
              ->references('id')
              ->on('categories');
      });
      Schema::table('category_post', function (Blueprint $table) {
        $table->foreign('post_id', 'post')
              ->references('id')
              ->on('posts');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('posts', function(Blueprint $table) {
        $table->dropForeign('author');
      });
    }
}
