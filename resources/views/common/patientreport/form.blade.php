<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Basic Information
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    {{ Form::label('name', 'Name :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->name !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('gender', 'Gender :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! strtoupper($item->patientInfo->gender) !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('age', 'Age :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->age !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('mobile', 'Mobile :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->mobile !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('refer_by', 'Reference By:', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->refer_by !!}
                    </div>
                </div>

                
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Other Information
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    {{ Form::label('email', 'Email :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->email !!}
                    </div>
                </div>
                
                <div class="form-group row">
                    {{ Form::label('address', 'Address :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->address !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('city', 'City :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->city !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('state', 'State :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->state !!}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('pin', 'Pin :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {!! $item->patientInfo->pin !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Reports
                </div>
            </div>
            <div class="card-body">
                <table class="table table-content">
                    <tr>
                        <td>Received On</td>
                        <td>Report Type</td>
                        <td>Cost</td>
                    </tr>
                    @php
                        $total = 0;
                    @endphp
                    @foreach($item->reportDetails as $reportDetail)
                        @php
                            $total = $total + $reportDetail->report_type->cost;
                        @endphp
                        <tr>
                            <td>{!! getReadableDateTime($item->received_on) !!}</td>
                            <td>{!! $reportDetail->report_type->title !!}</td>
                            <td align="right">{!! $reportDetail->report_type->cost !!}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td><strong>Total </strong></td>
                        <td align="right"><strong>{!! $total !!}</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        @if($item->sampleCollectionDetail)
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Collection
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        {{ Form::label('collector_name', 'Collector Name:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                           {!! $item->sampleCollectionDetail->sampleCollectedBy->name !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collection_location', 'Location:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {!! $item->sampleCollectionDetail->collected_from !!}
                        </div>
                    </div>

                     <div class="form-group row">
                        {{ Form::label('pickup_cost', 'Pickup Cost:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                             {!! $item->sampleCollectionDetail->pickup_cost !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collected_at', 'Collect Date Time:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                             {!! getReadableDateTime($item->sampleCollectionDetail->collected_at) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collection_note', 'Collection Notes:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                             {!! $item->sampleCollectionDetail->note !!}
                        </div>
                    </div>
                </div>
            </div>
        @endif
</div>