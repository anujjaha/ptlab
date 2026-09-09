<?php 

namespace App\Models\Profile\Traits\Relationship;

use App\Models\ProfileAddress\ProfileAddress;
use App\Models\User\User;
use App\Models\Tag\Tag;
use App\Models\ProfileProfessional\ProfileProfessional;

trait Relationship
{
	public function primaryAddress()
	{
		return $this->hasOne(ProfileAddress::class, 'profile_id');
	}

	public function profession()
	{
		return $this->hasOne(ProfileProfessional::class, 'profile_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function profileTag()
	{
	    return $this->belongsToMany(
	        Tag::class,
	        'data_profile_tags',
	        'profile_id',
	        'tag_id'
	    );

	}
}