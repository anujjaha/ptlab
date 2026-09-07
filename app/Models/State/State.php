<?php 

namespace App\Models\State;

/**
 * Class State
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\State\Traits\Attribute\Attribute;
use App\Models\State\Traits\Relationship\Relationship;

class State extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_states";

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