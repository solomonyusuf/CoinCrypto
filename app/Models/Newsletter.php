<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Newsletter
 * 
 * @property string $id
 * @property string|null $image
 * @property string|null $title
 * @property string|null $description
 * @property bool $sponsored
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Newsletter extends Model
{
	use HasUuids;
	protected $table = 'newsletters';
	public $incrementing = false;

	protected $casts = [
		'sponsored' => 'bool',
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'image',
		'title',
		'description',
		'sponsored',
		'visible'
	];
}
