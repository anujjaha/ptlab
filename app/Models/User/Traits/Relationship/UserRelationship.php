<?php

namespace App\Models\User\Traits\Relationship;

use App\Models\Account\Account;
/**
 * Class UserRelationship.
 */
trait UserRelationship
{
	public function account()
	{
		return $this->belongsTo(Account::class);
	}
}