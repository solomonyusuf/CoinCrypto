<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Advert
 * 
 * @property string $id
 * @property string $title
 * @property string $location
 * @property string $image
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Advert extends Model
{
	use HasUuids;
	protected $table = 'adverts';
	public $incrementing = false;

	protected $casts = [
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'link',
		'location',
		'title',
		'image',
		'visible'
	];
}
