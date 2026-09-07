<?php 

namespace App\Models\ProfileRelation;

/**
 * Class ProfileRelation
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileRelation\Traits\Attribute\Attribute;
use App\Models\ProfileRelation\Traits\Relationship\Relationship;

class ProfileRelation extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_relations";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "profile_id", "related_profile_id", "relation_type", "created_at", "updated_at", 
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