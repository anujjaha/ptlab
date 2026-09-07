<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileTagTransformer extends Transformer
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
			"tag_id" => (int) $item->tag_id,
			
        ];
    }
}