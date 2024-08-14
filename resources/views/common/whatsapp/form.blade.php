<div class="form-group">
    {{ Form::label('to_phone', 'To Phone :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('to_phone', null, ['class' => 'form-control', 'placeholder' => 'To Mobile', 'required' => 'required']) }}
    </div>
</div>

<div class="form-group">
    {{ Form::label('body', 'Body :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Body', 'required' => 'required']) }}
    </div>
</div>