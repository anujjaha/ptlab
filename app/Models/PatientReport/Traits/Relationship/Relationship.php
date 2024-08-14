<?php 

namespace App\Models\PatientReport\Traits\Relationship;

use App\Models\PatientReportDetails\PatientReportDetails;
use App\Models\SampleCollectionDetails\SampleCollectionDetails;
use App\Models\Patient\Patient;

trait Relationship
{
	public function reportDetails()
	{
		return $this->hasMany(PatientReportDetails::class);
	}

	public function sampleCollectionDetail()
	{
		return $this->belongsTo(SampleCollectionDetails::class);
	}


	public function patientInfo()
	{
		return $this->belongsTo(Patient::class, 'patient_id');
	}
}