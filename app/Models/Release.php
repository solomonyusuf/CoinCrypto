<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Release
 * 
 * @property string $id
 * @property string $newsletter_id
 * @property string $content
 * @property bool $publish
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Newsletter $newsletter
 *
 * @package App\Models
 */
class Release extends Model
{
	use HasUuids;
	protected $table = 'releases';
	public $incrementing = false;

	protected $casts = [
		'publish' => 'bool'
	];

	protected $fillable = [
		'newsletter_id',
		'content',
		'publish'
	];

	public function newsletter()
	{
		return $this->belongsTo(Newsletter::class);
	}
}
