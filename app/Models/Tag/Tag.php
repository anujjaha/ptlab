<?php 

namespace App\Models\Tag;

/**
 * Class Tag
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Tag\Traits\Attribute\Attribute;
use App\Models\Tag\Traits\Relationship\Relationship;

class Tag extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_tags";

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