<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('postId');
            $table->string('slug');
            $table->json('thumbnail'); //[type, path]
            $table->string('title');
            $table->bigInteger('categoryId')->unsigned();
            $table->bigInteger('authorId')->unsigned();
            $table->text('postBody');
            $table->bigInteger('appendPostId')->unsigned();
            $table->json('postTagsId');
            $table->string('views');
            $table->timestamps();

            $table->foreign('authorId')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('categoryId')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('appendPostId')->references('id')->on('posts')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
