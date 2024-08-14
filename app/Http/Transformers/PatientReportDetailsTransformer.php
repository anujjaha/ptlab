<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class PatientReportDetailsTransformer extends Transformer
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
			"patient_id" => (int) $item->patient_id,
			"report_type_id" => (int) $item->report_type_id,
			"total_cost" => (float) $item->total_cost,
			
        ];
    }
}