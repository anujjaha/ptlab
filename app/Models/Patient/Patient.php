<?php 

namespace App\Models\Patient;

/**
 * Class Patient
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Patient\Traits\Attribute\Attribute;
use App\Models\Patient\Traits\Relationship\Relationship;

class Patient extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_patient_entries";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id",  "is_wa", "name", "mobile", "gender", "age", "email", "refer_by", "address", "city", "state", "pin", "notes", "created_at", "updated_at", 
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