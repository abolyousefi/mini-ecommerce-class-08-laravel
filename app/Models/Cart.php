<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int $user_id
 * @property Carbon|null $created_at
 * 
 * @property User $user
 * @property Collection|CartItem[] $cartItems
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'carts';
	public $timestamps = false;
	public static $snakeAttributes = false;

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function cartItems()
	{
		return $this->hasMany(CartItem::class);
	}
}
