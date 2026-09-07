<?php 

namespace App\Models\ProfileSocial;

/**
 * Class ProfileSocial
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileSocial\Traits\Attribute\Attribute;
use App\Models\ProfileSocial\Traits\Relationship\Relationship;

class ProfileSocial extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_social_links";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "profile_id", "social_platform_id", "social_url", "status", "created_at", "updated_at", 
    ];

    /**
     * Timestamp flag
     *
     */
    public $timestamps = true;

    /**
     * Guarded ID Column
     *
     */
    protected $guarded = ["id"];
}