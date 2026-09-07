<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class SubCasteTransformer extends Transformer
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
			"caste_id" => (int) $item->caste_id,
			"title" => (string) $item->title,
			"status" => (int) $item->status,
			
        ];
    }
}