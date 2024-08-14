<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class SampleCollectorTransformer extends Transformer
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
			"name" => (string) $item->name,
			"address" => (string) $item->address,
			"email" => (string) $item->email,
			"mobile" => (string) $item->mobile,
			"other_mob_number" => (string) $item->other_mob_number,
			
        ];
    }
}