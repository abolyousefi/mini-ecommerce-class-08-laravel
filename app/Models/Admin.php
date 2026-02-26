<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\AdminStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as auth;

/**
 * Class admin
 *
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $password
 * @property bool|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Admin extends auth
{
	protected $table = 'admins';
	public static $snakeAttributes = false;

	protected $casts = [
		'status' => AdminStatus::class
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'username',
		'password',
		'status'
	];
}
