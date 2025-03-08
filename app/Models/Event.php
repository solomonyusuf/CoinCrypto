<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
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
	protected $table = 'events';
	public $incrementing = false;

	protected $casts = [
		'event_date' => 'datetime'
	];

	protected $fillable = [
		'title',
		'content',
		'image',
		'category',
		'event_date'
	];
}
