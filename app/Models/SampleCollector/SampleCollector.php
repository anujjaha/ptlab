<?php 

namespace App\Models\SampleCollector;

/**
 * Class SampleCollector
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\SampleCollector\Traits\Attribute\Attribute;
use App\Models\SampleCollector\Traits\Relationship\Relationship;

class SampleCollector extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_sample_collector";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "name", "address", "email", "mobile", "other_mob_number", "created_at", "updated_at", 
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