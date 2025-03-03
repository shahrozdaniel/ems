<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendees extends Model
{
	use HasFactory;

	public function event()
	{
		return $this->belongsTo(Events::class, 'event_id');
	}
}
