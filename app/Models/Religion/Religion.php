<?php 

namespace App\Models\Religion;

/**
 * Class Religion
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Religion\Traits\Attribute\Attribute;
use App\Models\Religion\Traits\Relationship\Relationship;

class Religion extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_religions";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "id", "status", "title", "updated_at", 
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