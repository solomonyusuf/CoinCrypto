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
        Schema::create('app_settings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('logo')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            //----- for contact-----------------------
            $table->text('address')->nullable();
            $table->text('contact')->nullable();
            
            //----- for nav-----------------------
            $table->string('news')->nullable();
            $table->string('prices')->nullable();
            $table->string('concensus')->nullable();
            $table->string('sponsored')->nullable();
            $table->string('videos')->nullable();
            $table->string('podcasts')->nullable();
            $table->string('newsletters')->nullable();
            $table->string('webinar')->nullable();
            //--------------------------------------------
            $table->text('footer_info')->nullable();
            $table->text('footer_name')->nullable();
            $table->text('do_not_sell')->nullable();
            $table->text('about')->nullable();
            $table->text('sitemap')->nullable();
            $table->text('ethics')->nullable();
            $table->text('terms')->nullable();
            $table->text('privacy')->nullable();
            $table->text('cookie')->nullable();
            $table->text('accessibility')->nullable();
            $table->text('advertising')->nullable();
            //-------------------------------------------------
            $table->boolean('langugage')->nullable();
            $table->boolean('top_ticker')->nullable();
            $table->boolean('advert')->nullable();
            $table->boolean('top_event')->nullable();
            $table->boolean('event_section')->nullable();
            $table->boolean('podcast')->nullable();
            $table->boolean('most_read')->nullable();
            $table->boolean('newsletter')->nullable();
            //------------------socical media-------------------------------
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('discord')->nullable();
            $table->string('telegram')->nullable();
            //-------------------------------------------------
            $table->string('apple')->nullable();
            $table->string('google')->nullable();
            

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
        Schema::dropIfExists('app_settings');
    }
};
