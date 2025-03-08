<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
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
	protected $table = 'article_categories';
	public $incrementing = false;

	protected $fillable = [
		'title'
	];

	public function articles()
	{
		return $this->hasMany(Article::class, 'category_id');
	}
}
