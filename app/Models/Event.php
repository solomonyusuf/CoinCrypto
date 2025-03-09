<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property string $id
 * @property string $title
 * @property string $content
 * @property string|null $image
 * @property string $category
 * @property Carbon $event_date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Event extends Model
{
	use HasUuids;
	protected $table = 'events';
	public $incrementing = false;

	protected $casts = [
		'event_date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'title',
		'content',
		'image',
		'category',
		'event_date'
	];
}
