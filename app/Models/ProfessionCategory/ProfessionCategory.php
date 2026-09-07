<?php 

namespace App\Models\ProfessionCategory;

/**
 * Class ProfessionCategory
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfessionCategory\Traits\Attribute\Attribute;
use App\Models\ProfessionCategory\Traits\Relationship\Relationship;

class ProfessionCategory extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profession_categories";

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