<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class CityTransformer extends Transformer
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
			"state_id" => (int) $item->state_id,
			"title" => (string) $item->title,
			
        ];
    }
}