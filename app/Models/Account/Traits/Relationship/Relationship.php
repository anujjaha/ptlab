<?php namespace App\Models\Account\Traits\Relationship;


use App\Models\Account_config\Account_config;

trait Relationship
{
	public function accountConfig()
	{
		return $this->hasOne(Account_config::class);
	}
}