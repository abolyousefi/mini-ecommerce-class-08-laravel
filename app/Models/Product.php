<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\ProductStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property int $id
 * @property int|null $category_id
 * @property string $name
 * @property string $name_en
 * @property string|null $description
 * @property int $price
 * @property int|null $discount
 * @property int $qty
 * @property int|null $image_file_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $status
 *
 * @property Category|null $category
 * @property File|null $file
 * @property Collection|CartItem[] $cartItems
 * @property Collection|OrderItem[] $orderItems
 * @property Collection|ProductImage[] $productImages
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	public static $snakeAttributes = false;

	protected $casts = [
		'category_id' => 'int',
		'price' => 'int',
		'discount' => 'int',
		'qty' => 'int',
		'image_file_id' => 'int',
		'status' => ProductStatus::class
	];

	protected $fillable = [
		'category_id',
		'name',
		'name_en',
		'description',
		'price',
		'discount',
		'qty',
		'image_file_id',
		'status'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function file()
	{
		return $this->belongsTo(File::class, 'image_file_id');
	}

	public function cartItems()
	{
		return $this->hasMany(CartItem::class);
	}

	public function orderItems()
	{
		return $this->hasMany(OrderItem::class);
	}

	public function productImages()
	{
		return $this->hasMany(ProductImage::class);
	}
}
