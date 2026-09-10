<?php 

namespace App\Models\ProfileAddress\Traits\Relationship;

use App\Models\City\City;
use App\Models\State\State;

trait Relationship
{
	public function city()
	{
		return $this->belongsTo(City::class, 'city_id');
	}

	public function state()
	{
		return $this->belongsTo(State::class, 'state_id');
	}
}