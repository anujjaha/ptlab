<?php 

namespace App\Models\Gotra;

/**
 * Class Gotra
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Gotra\Traits\Attribute\Attribute;
use App\Models\Gotra\Traits\Relationship\Relationship;

class Gotra extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_gotra_names";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "id", "title", "updated_at", 
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