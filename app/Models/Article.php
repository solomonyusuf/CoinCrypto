<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * 
 * @property string $id
 * @property string|null $title
 * @property string|null $info
 * @property string|null $slug
 * @property string|null $content
 * @property string|null $meta_tags
 * @property string|null $meta_description
 * @property string|null $image
 * @property bool $sponsored
 * @property bool $visible
 * @property string $category_id
 * @property int $views
 * @property string $newsletter_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ArticleCategory $article_category
 * @property Newsletter $newsletter
 * @property Collection|ArticleCreator[] $article_creators
 *
 * @package App\Models
 */
class Article extends Model
{
	use HasUuids;
	protected $table = 'articles';
	public $incrementing = false;

	protected $casts = [
		'sponsored' => 'bool',
		'visible' => 'bool',
		'views' => 'int'
	];

	protected $fillable = [
		'id',
		'title',
		'info',
		'slug',
		'content',
		'meta_tags',
		'meta_description',
		'image',
		'sponsored',
		'visible',
		'category_id',
		'views',
		'newsletter_id'
	];

	public function article_category()
	{
		return $this->belongsTo(ArticleCategory::class, 'category_id');
	}

	public function newsletter()
	{
		return $this->belongsTo(Newsletter::class);
	}

	public function article_creators()
	{
		return $this->hasMany(ArticleCreator::class);
	}
	public function socicals()
	{
		return $this->hasMany(ArticleSocical::class);
	}
}
