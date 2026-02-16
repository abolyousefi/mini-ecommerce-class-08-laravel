<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property string|null $description
 * @property int $price
 * @property int|null $discount
 * @property int|null $image_file_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $status
 * 
 * @property Category $category
 * @property File|null $file
 * @property Collection|CartItem[] $cart_items
 * @property Collection|OrderItem[] $order_items
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'category_id' => 'int',
		'price' => 'int',
		'discount' => 'int',
		'image_file_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'category_id',
		'name',
		'description',
		'price',
		'discount',
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

	public function cart_items()
	{
		return $this->hasMany(CartItem::class);
	}

	public function order_items()
	{
		return $this->hasMany(OrderItem::class);
	}
}
