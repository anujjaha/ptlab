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
    {{ Form::label('patient_report_id', 'Patient Report Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('patient_report_id', null, ['class' => 'form-control', 'placeholder' => 'Patient Report Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('pickup_cost', 'Pickup Cost :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('pickup_cost', null, ['class' => 'form-control', 'placeholder' => 'Pickup Cost', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('sub_total', 'Sub Total :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('sub_total', null, ['class' => 'form-control', 'placeholder' => 'Sub Total', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('gst', 'Gst :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('gst', null, ['class' => 'form-control', 'placeholder' => 'Gst', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('gst_total', 'Gst Total :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('gst_total', null, ['class' => 'form-control', 'placeholder' => 'Gst Total', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('total', 'Total :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('total', null, ['class' => 'form-control', 'placeholder' => 'Total', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('paid_by', 'Paid By :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('paid_by', null, ['class' => 'form-control', 'placeholder' => 'Paid By', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('paid_ref', 'Paid Ref :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('paid_ref', null, ['class' => 'form-control', 'placeholder' => 'Paid Ref', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('invoice_number', 'Invoice Number :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('invoice_number', null, ['class' => 'form-control', 'placeholder' => 'Invoice Number', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('notes', 'Notes :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'required' => 'required']) }}
    </div>
</div>