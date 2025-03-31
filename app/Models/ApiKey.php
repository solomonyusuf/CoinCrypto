<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ApiKey
 * 
 * @property string $id
 * @property string $role_id
 * @property string|null $key
 * @property string|null $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 *
 * @package App\Models
 */
class ApiKey extends Model
{
	use HasUuids;
	protected $table = 'api_keys';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'role_id',
		'key',
		'title'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
}
