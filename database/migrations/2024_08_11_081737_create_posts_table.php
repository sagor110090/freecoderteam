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
            $table->bigIncrements('id');
            $table->string('title', 191)->nullable();
            $table->string('slug', 191)->nullable();
            $table->longText('description')->nullable();
            $table->string('image', 191)->nullable();
            $table->boolean('is_publish')->default(false);
            $table->integer('visitor')->default(0);
            $table->unsignedBigInteger('user_id')->nullable()->index('posts_user_id_foreign');
            $table->timestamps();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(false);
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->timestamp('published_at')->nullable();
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
