<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * 
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string|null $image
 * @property bool $visible
 * @property string $user_id
 * @property string $category_id
 * @property int $views
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ArticleCategory $article_category
 * @property User $user
 *
 * @package App\Models
 */
class Article extends Model
{
	use HasUuids;
	protected $table = 'articles';
	public $incrementing = false;

	protected $casts = [
		'visible' => 'bool',
		'views' => 'int'
	];

	protected $fillable = [
		'title',
		'content',
		'image',
		'visible',
		'user_id',
		'category_id',
		'views'
	];

	public function article_category()
	{
		return $this->belongsTo(ArticleCategory::class, 'category_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
