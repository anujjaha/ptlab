<?php 

namespace App\Models\SubCaste;

/**
 * Class SubCaste
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\SubCaste\Traits\Attribute\Attribute;
use App\Models\SubCaste\Traits\Relationship\Relationship;

class SubCaste extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_sub_caste";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "caste_id", "created_at", "id", "status", "title", "updated_at", 
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