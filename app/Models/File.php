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
 * @property int $orginal_name
 * @property int $file_size
 * @property string $file_path
 * @property string|null $file_type
 * @property Carbon|null $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|ProductImage[] $productImages
 * @property Collection|Product[] $products
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'files';
	public static $snakeAttributes = false;

	protected $casts = [
		'orginal_name' => 'int',
		'file_size' => 'int'
	];

	protected $fillable = [
		'file_name',
		'orginal_name',
		'file_size',
		'file_path',
		'file_type'
	];

	public function productImages()
	{
		return $this->hasMany(ProductImage::class);
	}

	public function products()
	{
		return $this->hasMany(Product::class, 'image_file_id');
	}
}
