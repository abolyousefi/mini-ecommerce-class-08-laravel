<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $qty
 * @property int $price
 * @property int $total_price
 * @property int $discount
 * @property int $total_discount
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Order $order
 * @property Product $product
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_items';
	public static $snakeAttributes = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'qty' => 'int',
		'price' => 'int',
		'total_price' => 'int',
		'discount' => 'int',
		'total_discount' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'qty',
		'price',
		'total_price',
		'discount',
		'total_discount'
	];

	public function order()
	{
		return $this->belongsTo(Order::class);
	}

	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
