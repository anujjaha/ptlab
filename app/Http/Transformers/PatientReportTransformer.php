<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class PatientReportTransformer extends Transformer
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
			"sample_collection_detail_id" => (int) $item->sample_collection_detail_id,
			"total_cost" => (float) $item->total_cost,
			"status" => (int) $item->status,
			"is_watsapp" => (int) $item->is_watsapp,
			"is_email" => (int) $item->is_email,
			"watsapp_time" => (datetime) $item->watsapp_time,
			"email_time" => (datetime) $item->email_time,
			"is_sent" => (int) $item->is_sent,
			"sent_count" => (int) $item->sent_count,
			"attachment" => (string) $item->attachment,
			"attachment_time" => (datetime) $item->attachment_time,
			"reference_by" => (string) $item->reference_by,
			"unique_id" => (string) $item->unique_id,
			"collected_on" => (datetime) $item->collected_on,
			"received_on" => (datetime) $item->received_on,
			"reported_on" => (datetime) $item->reported_on,
			"notes" => (string) $item->notes,
			
        ];
    }
}