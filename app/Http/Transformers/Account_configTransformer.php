<?php
namespace App\Http\Transformers;

use App\Http\Transformers;

class Account_configTransformer extends Transformer
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
			"is_watsapp" => (int) $item->is_watsapp,
			"is_email" => (int) $item->is_email,
			"email_host" => (string) $item->email_host,
			"email_password" => (string) $item->email_password,
			"monthly_limit" => (int) $item->monthly_limit,
			"daily_limit" => (int) $item->daily_limit,
			"wa_template_url" => (string) $item->wa_template_url,
			"wa_template_id" => (int) $item->wa_template_id,
			"wa_phone_number" => (string) $item->wa_phone_number,
			
        ];
    }
}