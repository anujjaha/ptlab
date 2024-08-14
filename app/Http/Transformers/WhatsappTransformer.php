<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class WhatsappTransformer extends Transformer
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
			"to_phone" => (string) $item->to_phone,
			"body" => (longText) $item->body,
			
        ];
    }
}