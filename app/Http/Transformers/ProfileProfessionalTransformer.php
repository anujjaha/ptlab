<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileProfessionalTransformer extends Transformer
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
			"profile_id" => (int) $item->profile_id,
			"profession_category_id" => (int) $item->profession_category_id,
			"business_id" => (int) $item->business_id,
			"education" => (string) $item->education,
			"company" => (string) $item->company,
			"occupation" => (string) $item->occupation,
			"job_title" => (string) $item->job_title,
			"is_government" => (int) $item->is_government,
			"is_retired" => (int) $item->is_retired,
			"is_business" => (int) $item->is_business,
			"business_title" => (string) $item->business_title,
			"business_details" => (longText) $item->business_details,
			"is_social" => (int) $item->is_social,
			"social_details" => (longText) $item->social_details,
			"notes" => (longText) $item->notes,
			"overall_experience" => (string) $item->overall_experience,
			"is_student" => (int) $item->is_student,
			"is_open" => (int) $item->is_open,
			
        ];
    }
}