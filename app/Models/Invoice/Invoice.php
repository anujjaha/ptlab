<?php 

namespace App\Models\Invoice;

/**
 * Class Invoice
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Invoice\Traits\Attribute\Attribute;
use App\Models\Invoice\Traits\Relationship\Relationship;

class Invoice extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_invoice_entries";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "patient_id", "patient_report_id", "pickup_cost", "sub_total", "gst", "gst_total", "total", "paid_by", "paid_ref", "invoice_number", "notes", "created_at", "updated_at", 
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