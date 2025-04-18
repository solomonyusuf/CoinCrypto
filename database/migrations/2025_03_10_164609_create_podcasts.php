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
        Schema::create('podcasts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->text('link')->nullable();
            $table->text('image')->nullable();
            $table->text('host')->nullable();
            $table->foreignUuid('user_id')->references('id')->on('users')->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->boolean('sponsored')->default(false);
            $table->boolean('visible')->default(true);
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
        Schema::dropIfExists('podcasts');
    }
};
