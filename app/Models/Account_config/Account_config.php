<?php 

namespace App\Models\Account_config;

/**
 * Class Account_config
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Account_config\Traits\Attribute\Attribute;
use App\Models\Account_config\Traits\Relationship\Relationship;

class Account_config extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_account_config";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "account_id", "is_watsapp", "is_email", "email_host", "email_password", "monthly_limit", "daily_limit", "wa_template_url", "wa_template_id", "wa_phone_number", "created_at", "updated_at", 
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