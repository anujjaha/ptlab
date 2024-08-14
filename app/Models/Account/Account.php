<?php 

namespace App\Models\Account;

/**
 * Class Account
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Account\Traits\Attribute\Attribute;
use App\Models\Account\Traits\Relationship\Relationship;

class Account extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_account_entries";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "user_id", "title", "status", "notes", "created_at", "updated_at", 
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