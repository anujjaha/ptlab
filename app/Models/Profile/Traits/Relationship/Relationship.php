<?php 

namespace App\Models\Profile\Traits\Relationship;

use App\Models\ProfileAddress\ProfileAddress;
use App\Models\User\User;
use App\Models\Tag\Tag;

trait Relationship
{
	public function primaryAddress()
	{
		return $this->hasOne(ProfileAddress::class, 'profile_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function profileTag()
	{
		return $this->belongsTo(Tag::class, 'profile_tag_id');
	}
}