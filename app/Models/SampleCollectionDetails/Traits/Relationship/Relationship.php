<?php namespace App\Models\SampleCollectionDetails\Traits\Relationship;

use App\Models\SampleCollector\SampleCollector;


trait Relationship
{
	public function sampleCollectedBy()
	{
		return $this->belongsTo(SampleCollector::class, 'sample_collector_id');
	}
}