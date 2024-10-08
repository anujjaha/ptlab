<?php 

namespace App\Models\General;

/**
 * Class General
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\General\Traits\Attribute\Attribute;
use App\Models\General\Traits\Relationship\Relationship;

class General extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "general_codes";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "user_id", "account_id", "title", "name", "primary_contact", "email", "address", "city", "state", "pincode", "website", "gmap", "notes", "status", "web_qr", "email_qr", "gmap_qr", "phone_qr", "created_at", "updated_at", 
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