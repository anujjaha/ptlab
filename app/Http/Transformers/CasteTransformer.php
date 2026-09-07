<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class CasteTransformer extends Transformer
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
			"religion_id" => (int) $item->religion_id,
			"title" => (string) $item->title,
			"status" => (int) $item->status,
			
        ];
    }
}