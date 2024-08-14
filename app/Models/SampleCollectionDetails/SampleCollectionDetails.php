<?php 

namespace App\Models\SampleCollectionDetails;

/**
 * Class SampleCollectionDetails
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\SampleCollectionDetails\Traits\Attribute\Attribute;
use App\Models\SampleCollectionDetails\Traits\Relationship\Relationship;

class SampleCollectionDetails extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_sample_collection_details";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "sample_collector_id", "patient_id", "collected_at", "collected_from", "pickup_cost", "note", "status", "created_at", "updated_at", 
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