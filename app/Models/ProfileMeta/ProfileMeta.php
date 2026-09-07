<?php 

namespace App\Models\ProfileMeta;

/**
 * Class ProfileMeta
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileMeta\Traits\Attribute\Attribute;
use App\Models\ProfileMeta\Traits\Relationship\Relationship;

class ProfileMeta extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_meta";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "profile_id", "meta_key", "meta_value", "created_at", "updated_at", 
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