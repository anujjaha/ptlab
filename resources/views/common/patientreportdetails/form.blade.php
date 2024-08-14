<div class="form-group">
    {{ Form::label('account_id', 'Account Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('account_id', null, ['class' => 'form-control', 'placeholder' => 'Account Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('patient_id', 'Patient Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('patient_id', null, ['class' => 'form-control', 'placeholder' => 'Patient Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('report_type_id', 'Report Type Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('report_type_id', null, ['class' => 'form-control', 'placeholder' => 'Report Type Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('total_cost', 'Total Cost :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('total_cost', null, ['class' => 'form-control', 'placeholder' => 'Total Cost', 'required' => 'required']) }}
    </div>
</div>