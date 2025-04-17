<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AdvertSetting
 * 
 * @property string $id
 * @property string|null $one
 * @property string|null $two
 * @property string|null $three
 * @property string|null $four
 * @property string|null $five
 * @property string|null $six
 * @property string|null $seven
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class AdvertSetting extends Model
{
	use HasUuids;
	protected $table = 'advert_settings';
	public $incrementing = false;

	protected $fillable = [
		'one',
		'two',
		'three',
		'four',
		'five',
		'six',
		'seven'
	];
}
