<?php



namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ArticleCreator
 * 
 * @property string $id
 * @property string $article_id
 * @property string $user_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Article $article
 * @property User $user
 *
 * @package App\Models
 */
class ArticleCreator extends Model
{
	use HasUuids;
	protected $table = 'article_creators';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'article_id',
		'user_id'
	];

	public function article()
	{
		return $this->belongsTo(Article::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
