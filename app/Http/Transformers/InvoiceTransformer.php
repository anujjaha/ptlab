<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class InvoiceTransformer extends Transformer
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
			"patient_report_id" => (int) $item->patient_report_id,
			"pickup_cost" => (float) $item->pickup_cost,
			"sub_total" => (float) $item->sub_total,
			"gst" => (float) $item->gst,
			"gst_total" => (float) $item->gst_total,
			"total" => (float) $item->total,
			"paid_by" => (string) $item->paid_by,
			"paid_ref" => (string) $item->paid_ref,
			"invoice_number" => (string) $item->invoice_number,
			"notes" => (longText) $item->notes,
			
        ];
    }
}