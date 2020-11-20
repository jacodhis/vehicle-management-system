<?php
namespace App\Models\Support;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $table = 'booking';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'pickuppoint', 'pmsg', 'route', 'amt', 'email', 'status', 'regno', 'phone', 'pnumber', 'tamt'
	];
}