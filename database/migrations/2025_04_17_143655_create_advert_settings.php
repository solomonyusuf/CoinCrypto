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
        Schema::create('advert_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('one')->nullable();
            $table->foreignUuid('two')->nullable();
            $table->foreignUuid('three')->nullable();
            $table->foreignUuid('four')->nullable();
            $table->foreignUuid('five')->nullable();
            $table->foreignUuid('six')->nullable();
            $table->foreignUuid('seven')->nullable();
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
        Schema::dropIfExists('advert_settings');
    }
};
