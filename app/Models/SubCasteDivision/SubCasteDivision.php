<?php 

namespace App\Models\SubCasteDivision;

/**
 * Class SubCasteDivision
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\SubCasteDivision\Traits\Attribute\Attribute;
use App\Models\SubCasteDivision\Traits\Relationship\Relationship;

class SubCasteDivision extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_sub_caste_division";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "id", "status", "sub_caste_id", "title", "updated_at", 
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