<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class TagTransformer extends Transformer
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
			"title" => (string) $item->title,
			"status" => (int) $item->status,
			
        ];
    }
}