<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileMetaTransformer extends Transformer
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
			"meta_key" => (string) $item->meta_key,
			"meta_value" => (string) $item->meta_value,
			
        ];
    }
}