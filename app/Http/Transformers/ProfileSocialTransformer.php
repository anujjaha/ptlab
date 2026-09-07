<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileSocialTransformer extends Transformer
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
			"social_platform_id" => (int) $item->social_platform_id,
			"social_url" => (string) $item->social_url,
			"status" => (int) $item->status,
			
        ];
    }
}