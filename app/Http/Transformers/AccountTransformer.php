<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class AccountTransformer extends Transformer
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
			"user_id" => (int) $item->user_id,
			"title" => (string) $item->title,
			"status" => (int) $item->status,
			"notes" => (longText) $item->notes,
			
        ];
    }
}