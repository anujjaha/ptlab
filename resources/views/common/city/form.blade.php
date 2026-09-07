<div class="form-group">
    {{ Form::label('state_id', 'State Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('state_id', null, ['class' => 'form-control', 'placeholder' => 'State Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
    </div>
</div>