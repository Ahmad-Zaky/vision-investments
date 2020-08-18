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
<<<<<<< HEAD
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('excerpt');
            $table->text('body');
            $table->string('thumbnail')->nullable()->unique();
=======
            $table->string('slug');
            $table->string('title');
            $table->string('excerpt');
            $table->text('body');
            $table->string('thumbnail')->nullable();
>>>>>>> cf704e62529f0efa54daf011aede787371eced0d
            $table->integer('likes_count')->unsigned()->default(0);
            $table->integer('views_count')->unsigned()->default(0);
            $table->boolean('approved')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('reg_user_id');
            $table->foreign('reg_user_id')->references('id')->on('reg_users');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
