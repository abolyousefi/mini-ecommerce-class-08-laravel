<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * 
 * @property int $id
 * @property string $file_name
 * @property string $file_path
 * @property string|null $file_type
 * @property Carbon|null $created_at
 * 
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'files';
	public $timestamps = false;

	protected $fillable = [
		'file_name',
		'file_path',
		'file_type'
	];

	public function products()
	{
		return $this->hasMany(Product::class, 'image_file_id');
	}
}
