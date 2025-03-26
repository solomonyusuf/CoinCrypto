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
 * @property string|null $address
 * @property string|null $contact
 * @property string|null $news
 * @property string|null $prices
 * @property string|null $concensus
 * @property string|null $sponsored
 * @property string|null $videos
 * @property string|null $podcasts
 * @property string|null $news_section
 * @property string|null $newsletters
 * @property string|null $webinar
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
 * @property bool|null $language
 * @property bool|null $top_ticker
 * @property bool|null $advert
 * @property bool|null $top_event
 * @property bool|null $event_section
 * @property bool|null $podcast
 * @property bool|null $most_read
 * @property bool|null $first
 * @property bool|null $newsletter
 * @property string|null $twitter
 * @property string|null $facebook
 * @property string|null $linkedin
 * @property string|null $first
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $masthead
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
		'lanugage' => 'bool',
		'top_ticker' => 'bool',
		'advert' => 'bool',
		'top_event' => 'bool',
		'event_section' => 'bool',
		'podcast' => 'bool',
		'most_read' => 'bool',
		'newsletter' => 'bool'
	];

	protected $fillable = [
		'id',
		'logo',
		'name',
		'email',
		'address',
		'contact',
		'news',
		'prices',
		'concensus',
		'sponsored',
		'videos',
		'podcasts',
		'masthead',
		'news_section',
		'newsletters',
		'webinar',
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
		'first',
		'youtube',
		'tiktok',
		'discord',
		'telegram',
		'apple',
		'google'
	];
}
