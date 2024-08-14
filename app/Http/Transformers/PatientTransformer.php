<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class PatientTransformer extends Transformer
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
			"mobile" => (string) $item->mobile,
			"gender" => (string) $item->gender,
			"age" => (int) $item->age,
			"email" => (string) $item->email,
			"other_contact_no" => (string) $item->other_contact_no,
			"address" => (string) $item->address,
			"city" => (string) $item->city,
			"state" => (string) $item->state,
			"pin" => (string) $item->pin,
			"notes" => (longText) $item->notes,
			
        ];
    }
}