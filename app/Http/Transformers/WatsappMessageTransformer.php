<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class WatsappMessageTransformer extends Transformer
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
			"account_id" => (int) $item->account_id,
			"to_phone" => (string) $item->to_phone,
			"body_content" => (string) $item->body_content,
			"media_url" => (string) $item->media_url,
			"status" => (int) $item->status,
			"message_id" => (int) $item->message_id,
			"from_phone" => (string) $item->from_phone,
			"notes" => (longText) $item->notes,
			
        ];
    }
}