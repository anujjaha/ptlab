<?php 

namespace App\Models\WatsappMessage;

/**
 * Class WatsappMessage
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\WatsappMessage\Traits\Attribute\Attribute;
use App\Models\WatsappMessage\Traits\Relationship\Relationship;

class WatsappMessage extends BaseModel
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
        "id", "account_id", "to_phone", "body_content", "media_url", "status", "message_id", "from_phone", "notes", "created_at", "updated_at", 
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