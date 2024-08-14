<div class="form-group">
    {{ Form::label('account_id', 'Account Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('account_id', null, ['class' => 'form-control', 'placeholder' => 'Account Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('sample_collector_id', 'Sample Collector Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('sample_collector_id', null, ['class' => 'form-control', 'placeholder' => 'Sample Collector Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('patient_id', 'Patient Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('patient_id', null, ['class' => 'form-control', 'placeholder' => 'Patient Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('collected_at', 'Collected At :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('collected_at', null, ['class' => 'form-control', 'placeholder' => 'Collected At', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('collected_from', 'Collected From :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('collected_from', null, ['class' => 'form-control', 'placeholder' => 'Collected From', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('pickup_cost', 'Pickup Cost :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('pickup_cost', null, ['class' => 'form-control', 'placeholder' => 'Pickup Cost', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('note', 'Note :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'Note', 'required' => 'required']) }}
    </div>
</div>