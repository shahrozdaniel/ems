<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
	use HasFactory;

	public function attendees()
	{
		return $this->hasMany(Attendees::class, 'event_id', 'id');
	}
}
