<?php
namespace App\Models\Support;

use Illuminate\Database\Eloquent\Model;

class EmailList extends Model
{
	protected $table = 'mailing_list';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'username', 'email',
	];
}