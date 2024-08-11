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
        Schema::create('rich_texts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('record_type');
            $table->unsignedBigInteger('record_id');
            $table->string('field');
            $table->longText('body')->nullable();
            $table->timestamps();

            $table->unique(['field', 'record_type', 'record_id']);
            $table->index(['record_type', 'record_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rich_texts');
    }
};
