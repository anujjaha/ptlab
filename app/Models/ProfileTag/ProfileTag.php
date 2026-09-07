<?php 

namespace App\Models\ProfileTag;

/**
 * Class ProfileTag
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileTag\Traits\Attribute\Attribute;
use App\Models\ProfileTag\Traits\Relationship\Relationship;

class ProfileTag extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_tags";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "id", "profile_id", "tag_id", "updated_at", 
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