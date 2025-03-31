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
        Schema::create('articles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title')->nullable();
            $table->text('info')->nullable();
            $table->string('slug')->nullable();
            $table->longText('content')->nullable();
            $table->text('meta_tags')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->boolean('sponsored')->default(false);
            $table->boolean('visible')->default(true);
            $table->foreignUuid('category_id')->references('id')->on('article_categories')->nullable();
            $table->integer('views')->default(0);
            $table->foreignUuid('newsletter_id')->references('id')->on('newsletters')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
