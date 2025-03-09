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
 * Class Role
 * 
 * @property string $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	use HasUuids;
	protected $table = 'roles';
	public $incrementing = false;

	protected $fillable = [
		'id',
		'title'
	];

	public function users()
	{
		return $this->hasMany(User::class);
	}
}
