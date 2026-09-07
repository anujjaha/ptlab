<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileTransformer extends Transformer
{
    /**
     * Transform
     *
     * @param array $data
     * @return array
     */
    public function transform($item)
    {
        if(is_array($item))
        {
            $item = (object)$item;
        }

        return [
			"id" => (int) $item->id,
			"category_id" => (int) $item->category_id,
			"caste_id" => (int) $item->caste_id,
			"sub_caste_id" => (int) $item->sub_caste_id,
			"sub_cast_division_id" => (int) $item->sub_cast_division_id,
			"profile_tag_id" => (int) $item->profile_tag_id,
			"gotra_id" => (int) $item->gotra_id,
			"surname" => (string) $item->surname,
			"firstname" => (string) $item->firstname,
			"title" => (string) $item->title,
			"gender" => (string) $item->gender,
			"birthdate" => (date) $item->birthdate,
			"latedate" => (date) $item->latedate,
			"slug" => (string) $item->slug,
			"profile_image" => (string) $item->profile_image,
			"banner_image" => (string) $item->banner_image,
			"primary_mobile" => (string) $item->primary_mobile,
			"business_mobile" => (string) $item->business_mobile,
			"email" => (string) $item->email,
			"status" => (int) $item->status,
			"mobile_visibility" => (int) $item->mobile_visibility,
			"contact_visibility" => (int) $item->contact_visibility,
			"user_id" => (int) $item->user_id,
			"is_verify" => (int) $item->is_verify,
			"verify_at" => (datetime) $item->verify_at,
			"refer_by" => (int) $item->refer_by,
			"personal_notes" => (longText) $item->personal_notes,
			"admin_notes" => (longText) $item->admin_notes,
			"is_paid" => (int) $item->is_paid,
			"remarks" => (longText) $item->remarks,
			"refer_link" => (string) $item->refer_link,
			"last_active" => (datetime) $item->last_active,
			"visit_count" => (int) $item->visit_count,
			"is_original" => (int) $item->is_original,
			"is_flag" => (longText) $item->is_flag,
			
        ];
    }
}