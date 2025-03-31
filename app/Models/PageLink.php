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
 * Class PageLink
 * 
 * @property string $id
 * @property string|null $name
 * @property string|null $slug
 * @property bool|null $visible
 * @property string|null $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|SubPageLink[] $sub_page_links
 *
 * @package App\Models
 */
class PageLink extends Model
{
	use HasUuids;
	protected $table = 'page_links';
	public $incrementing = false;

	protected $casts = [
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'name',
		'slug',
		'visible',
		'content'
	];

	public function sub_page_links()
	{
		return $this->hasMany(SubPageLink::class, 'page_id');
	}
}
