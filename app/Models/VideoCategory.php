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
 * Class VideoCategory
 * 
 * @property string $id
 * @property string|null $description
 * @property string|null $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|AppVideo[] $app_videos
 *
 * @package App\Models
 */
class VideoCategory extends Model
{
	use HasUuids;
	protected $table = 'video_categories';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'description',
		'title'
	];

	public function app_videos()
	{
		return $this->hasMany(AppVideo::class, 'category_id');
	}
}
