<?php
namespace App\Models\Support;

use Illuminate\Database\Eloquent\Model;

class SupportRequest extends Model
{
	protected $table = 'supports';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'support_id','name', 'email', 'phonenumber','country','school','title','notes'
	];
}