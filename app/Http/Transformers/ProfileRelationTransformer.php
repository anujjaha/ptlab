<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileRelationTransformer extends Transformer
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
			"related_profile_id" => (int) $item->related_profile_id,
			"relation_type" => (string) $item->relation_type,
			
        ];
    }
}