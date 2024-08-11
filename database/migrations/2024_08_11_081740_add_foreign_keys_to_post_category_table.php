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
        Schema::table('post_category', function (Blueprint $table) {
            $table->foreign(['category_id'])->references(['id'])->on('categories')->onUpdate('no action')->onDelete('cascade');
            $table->foreign(['post_id'])->references(['id'])->on('posts')->onUpdate('no action')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('post_category', function (Blueprint $table) {
            $table->dropForeign('post_category_category_id_foreign');
            $table->dropForeign('post_category_post_id_foreign');
        });
    }
};
