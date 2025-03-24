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
 * Class Podcast
 * 
 * @property string $id
 * @property string|null $link
 * @property string|null $image
 * @property string|null $host
 * @property string $user_id
 * @property string|null $title
 * @property string|null $description
 * @property bool $sponsored
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Episode[] $episodes
 *
 * @package App\Models
 */
class Podcast extends Model
{
	use HasUuids;
	protected $table = 'podcasts';
	public $incrementing = false;

	protected $casts = [
		'sponsored' => 'bool',
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'link',
		'image',
		'host',
		'user_id',
		'title',
		'description',
		'sponsored',
		'visible'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function episodes()
	{
		return $this->hasMany(Episode::class);
	}
}
