<div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('meta_key', 'Meta Key :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('meta_key', null, ['class' => 'form-control', 'placeholder' => 'Meta Key', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('meta_value', 'Meta Value :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('meta_value', null, ['class' => 'form-control', 'placeholder' => 'Meta Value', 'required' => 'required']) }}
    </div>
</div>