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
            $table->string('theme')->default('black')->nullable();
            //----- for sections-----------------------
            $table->foreignUuid('top_left_article')->nullable();
            $table->foreignUuid('top_right_article')->nullable();
             
            $table->foreignUuid('second_left')->nullable();
            $table->foreignUuid('second_right')->nullable();
           
            $table->foreignUuid('third_section')->nullable();
            $table->foreignUuid('fourth_section')->nullable();
            $table->foreignUuid('fifth_section')->nullable();
             
            //----- for event bg-----------------------
            $table->string('default_event_color')->default('white')->nullable();
            $table->string('default_event_background')->default('#464dfb')->nullable();
            
            //----- for mails-----------------------
            $table->longText('mail_layout')->nullable();
            $table->string('login_subject')->nullable();
            $table->longText('login_mail')->nullable();
            $table->string('register_subject')->nullable();
            $table->longText('register_mail')->nullable();
            $table->string('reset_subject')->nullable();
            $table->longText('reset_mail')->nullable();
            $table->string('activate_newsletter_subject')->nullable();
            $table->longText('activate_newsletter_mail')->nullable();
            
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
            $table->string('news_section')->nullable();
            $table->string('webinar')->nullable();
            //--------------------------------------------
            $table->longText('masthead')->nullable();
            $table->longText('footer_info')->nullable();
            $table->longText('footer_name')->nullable();
            $table->longText('do_not_sell')->nullable();
            $table->longText('about')->nullable();
            $table->longText('sitemap')->nullable();
            $table->longText('ethics')->nullable();
            $table->longText('terms')->nullable();
            $table->longText('privacy')->nullable();
            $table->longText('cookie')->nullable();
            $table->longText('accessibility')->nullable();
            $table->longText('advertising')->nullable();
            //-------------------------------------------------
            $table->boolean('first')->nullable();
            $table->boolean('second')->nullable();
            $table->boolean('third')->nullable();
            $table->boolean('language')->nullable();
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
