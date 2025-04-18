<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleSocical
 * 
 * @property string $id
 * @property string $article_id
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $instagram
 * @property string|null $telegram
 * @property string|null $tiktok
 * @property string|null $youtube
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 *
 * @package App\Models
 */
class ArticleSocical extends Model
{
	use HasUuids;
	protected $table = 'article_socicals';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'article_id',
		'facebook',
		'twitter',
		'instagram',
		'telegram',
		'youtube',
		'tiktok'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}
}
