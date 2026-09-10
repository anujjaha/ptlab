<?php 

namespace App\Models\ProfileAddress;

/**
 * Class ProfileAddress
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileAddress\Traits\Attribute\Attribute;
use App\Models\ProfileAddress\Traits\Relationship\Relationship;

class ProfileAddress extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_addresses";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "profile_id", "address_line1", "address_line2", "city_id", "state_id", "pin", "is_current", "is_own", "rent", "created_at", "updated_at", 
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

    public function getFullAddress()
    {
        return $this->address_line1 . ', ' . $this->address_line2 . ' ' . ($this->city->title ?? '') . ' ' . ($this->state->title ?? '' );
    }
}