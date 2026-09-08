<?php 

namespace App\Models\ProfileProfessional;

/**
 * Class ProfileProfessional
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\ProfileProfessional\Traits\Attribute\Attribute;
use App\Models\ProfileProfessional\Traits\Relationship\Relationship;

class ProfileProfessional extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profile_professional_details";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "id", "profile_id", "profession_category_id", "business_id", "education", "company", "occupation", "job_title", "is_government", "is_retired", "is_business", "business_title", "business_details", "is_social", "social_details", "notes", "overall_experience", "is_student", "is_open", "created_at", "updated_at", 
        "business_started", "business_website"
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