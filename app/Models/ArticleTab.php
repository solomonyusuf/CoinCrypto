<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleTab
 * 
 * @property string $id
 * @property string|null $first
 * @property string|null $second
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class ArticleTab extends Model
{
	use HasUuids;
	protected $table = 'article_tabs';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'first',
		'second'
	];
}
