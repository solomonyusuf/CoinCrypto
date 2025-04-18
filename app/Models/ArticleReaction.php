<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleReaction
 * 
 * @property string $id
 * @property string $article_id
 * @property string|null $type
 * @property int|null $count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 *
 * @package App\Models
 */
class ArticleReaction extends Model
{
	use HasUuids;
	protected $table = 'article_reactions';
	public $incrementing = false;

	protected $casts = [
		'count' => 'int'
	];

	protected $fillable = [
		'id',
		'article_id',
		'type',
		'count'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}
}
