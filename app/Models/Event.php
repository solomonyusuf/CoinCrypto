<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Event
 * 
 * @property string $id
 * @property string $title
 * @property string|null $content
 * @property bool $sponsored
 * @property string|null $image
 * @property string|null $category
 * @property Carbon|null $event_date
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
		'sponsored' => 'bool',
		'event_date' => 'datetime'
	];

	protected $fillable = [
		'id',
		'title',
		'content',
		'sponsored',
		'image',
		'category',
		'event_date'
	];
}
