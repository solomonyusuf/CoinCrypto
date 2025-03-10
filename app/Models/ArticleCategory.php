<?php

 

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleCategory
 * 
 * @property string $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Article[] $articles
 *
 * @package App\Models
 */
class ArticleCategory extends Model
{
	use HasUuids;
	protected $table = 'article_categories';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'title'
	];

	public function articles()
	{
		return $this->hasMany(Article::class, 'category_id');
	}
}
