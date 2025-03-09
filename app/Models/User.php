<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * 
 * @property string $id
 * @property string $role_id
 * @property string|null $image
 * @property string|null $info
 * @property string|null $linkedin
 * @property string|null $twitter
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;
	protected $table = 'users';
	public $incrementing = false;

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'id',
		'role_id',
		'image',
		'info',
		'linkedin',
		'twitter',
		'first_name',
		'last_name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}
	public function articles()
	{
		return $this->hasMany(Article::class, 'user_id');
	}
}
