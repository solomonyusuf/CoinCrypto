<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscription
 * 
 * @property string $id
 * @property string $newsletter_id
 * @property string $email
 * @property bool $confirmed
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Newsletter $newsletter
 *
 * @package App\Models
 */
class Subscription extends Model
{
	use HasUuids;
	protected $table = 'subscriptions';
	public $incrementing = false;

	protected $casts = [
		'confirmed' => 'bool'
	];

	protected $fillable = [
		'newsletter_id',
		'email',
		'confirmed'
	];

	public function newsletter()
	{
		return $this->belongsTo(Newsletter::class);
	}
}
