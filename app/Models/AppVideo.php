<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppVideo
 * 
 * @property string $id
 * @property string|null $link
 * @property string|null $image
 * @property string|null $title
 * @property string $category_id
 * @property string|null $description
 * @property bool $sponsored
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property VideoCategory $video_category
 *
 * @package App\Models
 */
class AppVideo extends Model
{
	use HasUuids;
	protected $table = 'app_videos';
	public $incrementing = false;

	protected $casts = [
		'sponsored' => 'bool',
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'link',
		'image',
		'title',
		'category_id',
		'description',
		'sponsored',
		'visible'
	];

	public function video_category()
	{
		return $this->belongsTo(VideoCategory::class, 'category_id');
	}
}
