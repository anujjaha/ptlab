<div class="form-group">
    {{ Form::label('status', 'Status :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('sub_caste_id', 'Sub Caste Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('sub_caste_id', null, ['class' => 'form-control', 'placeholder' => 'Sub Caste Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
    </div>
</div>