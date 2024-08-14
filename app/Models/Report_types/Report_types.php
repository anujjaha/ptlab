<?php 

namespace App\Models\Report_types;

/**
 * Class Report_types
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Report_types\Traits\Attribute\Attribute;
use App\Models\Report_types\Traits\Relationship\Relationship;

class Report_types extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_report_types";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "title", "cost", "appx_time", "note", "created_at", "updated_at", 
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