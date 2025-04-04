<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppSetting
 * 
 * @property string $id
 * @property string|null $logo
 * @property string|null $name
 * @property string|null $email
 * @property string|null $theme
 * @property string|null $top_left_article
 * @property string|null $top_right_article
 * @property string|null $second_left
 * @property string|null $second_right
 * @property string|null $third_section
 * @property string|null $fourth_section
 * @property string|null $fifth_section
 * @property bool|null $top_left_article_show
 * @property bool|null $top_right_article_show
 * @property bool|null $second_left_show
 * @property bool|null $second_right_show
 * @property bool|null $third_section_show
 * @property bool|null $fourth_section_show
 * @property bool|null $fifth_section_show
 * @property string|null $default_event_color
 * @property string|null $default_event_background
 * @property string|null $mail_layout
 * @property string|null $login_subject
 * @property string|null $login_mail
 * @property string|null $register_subject
 * @property string|null $register_mail
 * @property string|null $reset_subject
 * @property string|null $reset_mail
 * @property string|null $activate_newsletter_subject
 * @property string|null $activate_newsletter_mail
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $news
 * @property string|null $prices
 * @property string|null $concensus
 * @property string|null $sponsored
 * @property string|null $videos
 * @property string|null $podcasts
 * @property string|null $newsletters
 * @property string|null $news_section
 * @property string|null $webinar
 * @property string|null $masthead
 * @property string|null $footer_info
 * @property string|null $footer_name
 * @property string|null $do_not_sell
 * @property string|null $about
 * @property string|null $sitemap
 * @property string|null $ethics
 * @property string|null $terms
 * @property string|null $privacy
 * @property string|null $cookie
 * @property string|null $accessibility
 * @property string|null $advertising
 * @property bool|null $first
 * @property bool|null $second
 * @property bool|null $third
 * @property bool|null $language
 * @property bool|null $top_ticker
 * @property bool|null $advert
 * @property bool|null $top_event
 * @property bool|null $event_section
 * @property bool|null $podcast
 * @property bool|null $most_read
 * @property bool|null $newsletter
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $tiktok
 * @property string|null $discord
 * @property string|null $telegram
 * @property string|null $apple
 * @property string|null $google
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class AppSetting extends Model
{
	use HasUuids;
	protected $table = 'app_settings';
	public $incrementing = false;

	protected $casts = [
		'top_left_article_show' => 'bool',
		'top_right_article_show' => 'bool',
		'second_left_show' => 'bool',
		'second_right_show' => 'bool',
		'third_section_show' => 'bool',
		'fourth_section_show' => 'bool',
		'fifth_section_show' => 'bool',
		'first' => 'bool',
		'second' => 'bool',
		'third' => 'bool',
		'language' => 'bool',
		'top_ticker' => 'bool',
		'advert' => 'bool',
		'top_event' => 'bool',
		'event_section' => 'bool',
		'podcast' => 'bool',
		'most_read' => 'bool',
		'newsletter' => 'bool'
	];

	protected $fillable = [
		'logo',
		'name',
		'email',
		'theme',
		'top_left_article',
		'top_right_article',
		'second_left',
		'second_right',
		'third_section',
		'fourth_section',
		'fifth_section',
		'top_left_article_show',
		'top_right_article_show',
		'second_left_show',
		'second_right_show',
		'third_section_show',
		'fourth_section_show',
		'fifth_section_show',
		'default_event_color',
		'default_event_background',
		'mail_layout',
		'login_subject',
		'login_mail',
		'register_subject',
		'register_mail',
		'reset_subject',
		'reset_mail',
		'activate_newsletter_subject',
		'activate_newsletter_mail',
		'address',
		'contact',
		'news',
		'prices',
		'concensus',
		'sponsored',
		'videos',
		'podcasts',
		'newsletters',
		'news_section',
		'webinar',
		'masthead',
		'footer_info',
		'footer_name',
		'do_not_sell',
		'about',
		'sitemap',
		'ethics',
		'terms',
		'privacy',
		'cookie',
		'accessibility',
		'advertising',
		'first',
		'second',
		'third',
		'language',
		'top_ticker',
		'advert',
		'top_event',
		'event_section',
		'podcast',
		'most_read',
		'newsletter',
		'twitter',
		'facebook',
		'linkedin',
		'instagram',
		'youtube',
		'tiktok',
		'discord',
		'telegram',
		'apple',
		'google'
	];
}
