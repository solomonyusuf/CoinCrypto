<?php



namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Podcast
 * 
 * @property string $id
 * @property string|null $link
 * @property string|null $image
 * @property string|null $host
 * @property string|null $title
 * @property string|null $description
 * @property bool $sponsored
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
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
		'title',
		'description',
		'sponsored',
		'visible'
	];
}
