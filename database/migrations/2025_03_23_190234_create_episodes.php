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
        Schema::create('episodes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('podcast_id')->references('id')->on('podcasts')->onDelete('cascade');
            $table->text('link')->nullable();
            $table->text('image')->nullable();
            $table->text('title')->nullable();
            $table->text('castbox')->nullable();
            $table->text('itunes')->nullable();
            $table->text('spotify')->nullable();
            $table->text('podchaser')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('episodes');
    }
};
