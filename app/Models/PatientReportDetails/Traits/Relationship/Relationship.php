<?php namespace App\Models\PatientReportDetails\Traits\Relationship;

use App\Models\Report_types\Report_types;

trait Relationship
{
	public function report_type()
	{
		return $this->belongsTo(Report_types::class);
	}
}