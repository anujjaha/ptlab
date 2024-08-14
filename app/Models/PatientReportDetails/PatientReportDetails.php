<?php 

namespace App\Models\PatientReportDetails;

/**
 * Class PatientReportDetails
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\PatientReportDetails\Traits\Attribute\Attribute;
use App\Models\PatientReportDetails\Traits\Relationship\Relationship;

class PatientReportDetails extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_patient_report_details";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "patient_id" ,"patient_report_id", "report_type_id", "total_cost", "created_at", "updated_at", 
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