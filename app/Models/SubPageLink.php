<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubPageLink
 * 
 * @property string $id
 * @property string $page_id
 * @property string|null $name
 * @property string|null $slug
 * @property bool|null $visible
 * @property string|null $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property PageLink $page_link
 *
 * @package App\Models
 */
class SubPageLink extends Model
{
	use HasUuids;
	protected $table = 'sub_page_links';
	public $incrementing = false;

	protected $casts = [
		'visible' => 'bool'
	];

	protected $fillable = [
		'id',
		'page_id',
		'name',
		'slug',
		'visible',
		'content'
	];

	public function page_link()
	{
		return $this->belongsTo(PageLink::class, 'page_id');
	}
}
