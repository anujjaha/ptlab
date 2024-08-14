<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class SampleCollectionDetailsTransformer extends Transformer
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
			"sample_collector_id" => (int) $item->sample_collector_id,
			"patient_id" => (int) $item->patient_id,
			"collected_at" => (datetime) $item->collected_at,
			"collected_from" => (string) $item->collected_from,
			"pickup_cost" => (float) $item->pickup_cost,
			"note" => (longText) $item->note,
			
        ];
    }
}