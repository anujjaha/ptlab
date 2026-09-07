<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileRecognitionTransformer extends Transformer
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
			"icon" => (string) $item->icon,
			"title" => (string) $item->title,
			"notes" => (longText) $item->notes,
			"external_link_title" => (string) $item->external_link_title,
			"external_links" => (string) $item->external_links,
			
        ];
    }
}