<?php 

namespace App\Models\PatientReport;

/**
 * Class PatientReport
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\PatientReport\Traits\Attribute\Attribute;
use App\Models\PatientReport\Traits\Relationship\Relationship;

class PatientReport extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_patient_report";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "patient_id", "sample_collection_detail_id", "total_cost", "status", "is_watsapp", "is_email", "watsapp_time", "email_time", "is_sent", "sent_count", "attachment", "attachment_time", "reference_by", "unique_id", "collected_on", "received_on", "reported_on", "notes", "created_at", "updated_at", 
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