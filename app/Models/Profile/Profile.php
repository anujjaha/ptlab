<?php 

namespace App\Models\Profile;

/**
 * Class Profile
 *
 * @author Anuj Jaha ( er.anujjaha@gmail.com)
 */

use App\Models\BaseModel;
use App\Models\Profile\Traits\Attribute\Attribute;
use App\Models\Profile\Traits\Relationship\Relationship;

class Profile extends BaseModel
{
    use Attribute, Relationship;
    /**
     * Database Table
     *
     */
    protected $table = "data_profiles";

    /**
     * Fillable Database Fields
     *
     */
    protected $fillable = [
        "admin_notes", "banner_image", "birthdate", "business_mobile", "caste_id", "category_id", "contact_visibility", "created_at", "email", "firstname", "flag_info", "gender", "gotra_id", "id", "is_original", "is_paid", "is_verify", "last_active", "latedate", "mobile_visibility", "personal_notes", "primary_mobile", "profile_image", "profile_tag_id", "refer_by", "refer_link", "remarks", "slug", "status", "sub_cast_division_id", "sub_caste_id", "surname", "title", "updated_at", "user_id", "verify_at", "visit_count", 
        "hobby", "priority", "member_type"
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

    public function getProfileImageAttribute()
    {
        return 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face';
    }
}