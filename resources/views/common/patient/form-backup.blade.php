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
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('gender', 'Gender :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::select('gender', [
                            'male' => 'Male',
                            'female' => 'Female'
                        ], null, ['class' => 'form-control', 'placeholder' => 'Select Gender', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('age', 'Age :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('age', null, ['class' => 'form-control', 'placeholder' => 'Age', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('mobile', 'Mobile :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('refer_by', 'Reference By:', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('refer_by', null, ['class' => 'form-control', 'placeholder' => 'Refer Doctor Name']) }}
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
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}
                    </div>
                </div>
                
                <div class="form-group row">
                    {{ Form::label('address', 'Address :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('city', 'City :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('city', $item->city ?? 'Godhra', ['class' => 'form-control', 'placeholder' => 'City', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('state', 'State :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('state', $item->state ?? 'Gujarat', ['class' => 'form-control', 'placeholder' => 'State']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('pin', 'Pin :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('pin', $item->pin ?? '380001', ['class' => 'form-control', 'placeholder' => 'Pin']) }}
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
                        <td>Select</td>
                        <td>Report Type</td>
                        <td>Cost</td>
                    </tr>
                    @foreach($reportTypes as $reportType)
                        <tr>
                            <td>
                                <input data-title="{!! $reportType->title !!}" data-cost="{!! $reportType->cost !!}" class="report_type form-control" type="checkbox" id="reportType_{!! $reportType->id !!}" name="reportType[]" value="{!! $reportType->id !!}" class="form-control">
                            </td>
                            <td>{!! $reportType->title !!}</td>
                            <td>{!! $reportType->cost !!}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Collection
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    {{ Form::label('collect_sample', 'Collection:', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::select('collect_sample',
                        [
                            1 => 'Yes',
                            0 => 'No'
                        ],
                         null, ['class' => 'form-control', 'placeholder' => 'Need to Collect', 'onchange' => 'manageCollectorOpt()', 'id' => 'collect_sample']) }}
                    </div>
                </div>

                <div id="collectorContainer"  style="display: none;">
                    <div class="form-group row">
                        {{ Form::label('collector_name', 'Collector Name:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {{ Form::select('collector_id', $collectorOpts, null, ['class' => 'form-control', 'placeholder' => 'Select Collector']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collection_location', 'Location:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {{ Form::text('collection_location', null, ['class' => 'form-control', 'placeholder' => 'Location']) }}
                        </div>
                    </div>

                     <div class="form-group row">
                        {{ Form::label('pickup_cost', 'Pickup Cost:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {{ Form::text('pickup_cost', 0, ['class' => 'form-control', 'placeholder' => 'Pickup Cost']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collected_at', 'Collect Date Time:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {{ Form::text('collected_at', null, ['class' => 'form-control', 'placeholder' => 'Collect date time']) }}
                        </div>
                    </div>

                    <div class="form-group row">
                        {{ Form::label('collection_note', 'Collection Notes:', ['class' => 'col-lg-3 control-label']) }}
                        <div class="col-lg-9">
                            {{ Form::textarea('collection_note', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'rows' => 3]) }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>