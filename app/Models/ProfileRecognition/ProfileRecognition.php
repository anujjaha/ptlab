<?php 

namespace App\Models\ProfileRecognition;

/**
 * Class ProfileRecognition
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileRecognition\Traits\Attribute\Attribute;
use App\Models\ProfileRecognition\Traits\Relationship\Relationship;

class ProfileRecognition extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_recognition";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "created_at", "external_link_title", "external_links", "icon", "id", "notes", "profile_id", "title", "updated_at", 
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