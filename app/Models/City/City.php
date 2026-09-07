<?php 

namespace App\Models\City;

/**
 * Class City
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\City\Traits\Attribute\Attribute;
use App\Models\City\Traits\Relationship\Relationship;

class City extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_cities";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "state_id", "title", "created_at", "updated_at", 
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