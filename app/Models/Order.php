<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_id
 * @property int $total_price
 * @property int $total_discount
 * @property int $total_products
 * @property string $traking_code
 * @property string $user_province
 * @property string $user_city
 * @property string $user_address
 * @property string $user_postal_code
 * @property string $user_mobile
 * @property string $description
 * @property bool|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|OrderItem[] $orderItems
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public static $snakeAttributes = false;

	protected $casts = [
		'user_id' => 'int',
		'total_price' => 'int',
		'total_discount' => 'int',
		'total_products' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'total_price',
		'total_discount',
		'total_products',
		'traking_code',
		'user_province',
		'user_city',
		'user_address',
		'user_postal_code',
		'user_mobile',
		'description',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function orderItems()
	{
		return $this->hasMany(OrderItem::class);
	}
}
