<?php 

namespace App\Models\Caste;

/**
 * Class Caste
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Caste\Traits\Attribute\Attribute;
use App\Models\Caste\Traits\Relationship\Relationship;

class Caste extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_caste";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "id", "religion_id", "status", "title", "updated_at", 
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