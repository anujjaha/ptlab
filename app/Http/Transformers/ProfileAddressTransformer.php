<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class ProfileAddressTransformer extends Transformer
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
			"address_line1" => (string) $item->address_line1,
			"address_line2" => (string) $item->address_line2,
			"city_id" => (int) $item->city_id,
			"state_id" => (int) $item->state_id,
			"pin" => (string) $item->pin,
			"is_current" => (int) $item->is_current,
			"is_own" => (int) $item->is_own,
			"rent" => (string) $item->rent,
			
        ];
    }
}