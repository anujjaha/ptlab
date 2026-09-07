<?php 

namespace App\Models\SocialPlatform;

/**
 * Class SocialPlatform
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\SocialPlatform\Traits\Attribute\Attribute;
use App\Models\SocialPlatform\Traits\Relationship\Relationship;

class SocialPlatform extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_social_media_platforms";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "title", "status", "created_at", "updated_at", 
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