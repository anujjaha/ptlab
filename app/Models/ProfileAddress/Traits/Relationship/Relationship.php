<?php 

namespace App\Models\ProfileAddress\Traits\Relationship;

use App\Models\City\City;

trait Relationship
{
	public function city()
	{
		return $this->belongsTo(City::class, 'city_id');
	}
}