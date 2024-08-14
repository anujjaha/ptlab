<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class Report_typesTransformer extends Transformer
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
			"title" => (string) $item->title,
			"cost" => (float) $item->cost,
			"appx_time" => (timestamp) $item->appx_time,
			"note" => (longText) $item->note,
			
        ];
    }
}