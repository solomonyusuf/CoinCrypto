<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Episode
 * 
 * @property string $id
 * @property string $podcast_id
 * @property string|null $link
 * @property string|null $image
 * @property string|null $title
 * @property string|null $castbox
 * @property string|null $itunes
 * @property string|null $spotify
 * @property string|null $podchaser
 * @property string|null $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Podcast $podcast
 *
 * @package App\Models
 */
class Episode extends Model
{
	use HasUuids;
	protected $table = 'episodes';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'podcast_id',
		'link',
		'image',
		'title',
		'castbox',
		'itunes',
		'spotify',
		'podchaser',
		'description'
	];

	public function podcast()
	{
		return $this->belongsTo(Podcast::class);
	}
}
