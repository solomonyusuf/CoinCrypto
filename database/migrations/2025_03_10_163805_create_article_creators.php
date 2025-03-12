<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_creators', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('article_id')->references('id')->on('articles')->nullable();
            $table->foreignUuid('user_id')->references('id')->on('users')->nullable();
            $table->boolean('originator')->default(false);
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
        Schema::dropIfExists('article_creators');
    }
};
