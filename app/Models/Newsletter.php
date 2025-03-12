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
 * Class Newsletter
 * 
 * @property string $id
 * @property string|null $image
 * @property string|null $title
 * @property string|null $host_image
 * @property string|null $host_name
 * @property string|null $description
 * @property bool $sponsored
 * @property bool $visible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Release[] $releases
 * @property Collection|Subscription[] $subscriptions
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
		'image',
		'title',
		'host_image',
		'host_name',
		'description',
		'sponsored',
		'visible'
	];

	public function releases()
	{
		return $this->hasMany(Release::class);
	}

	public function subscriptions()
	{
		return $this->hasMany(Subscription::class);
	}
}
