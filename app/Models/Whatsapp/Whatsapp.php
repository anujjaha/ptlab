<?php 

namespace App\Models\Whatsapp;

/**
 * Class Whatsapp
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Whatsapp\Traits\Attribute\Attribute;
use App\Models\Whatsapp\Traits\Relationship\Relationship;

class Whatsapp extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_wa_messages";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id",  "to_phone",
        "body_content", "input_params", "media_url", "status", "message_id",
        "from_phone", "notes",
        "created_at", "updated_at", 
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