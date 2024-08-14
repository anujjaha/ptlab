<div class="form-group">
    {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('cost', 'Cost :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('cost', null, ['class' => 'form-control', 'placeholder' => 'Cost', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('appx_time', 'Appx Time :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('appx_time', null, ['class' => 'form-control', 'placeholder' => 'Appx Time', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('note', 'Note :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('note', null, ['class' => 'form-control', 'placeholder' => 'Note', 'required' => 'required']) }}
    </div>
</div>