<div class="form-group">
    {{ Form::label('account_id', 'Account Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('account_id', null, ['class' => 'form-control', 'placeholder' => 'Account Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('to_phone', 'To Phone :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('to_phone', null, ['class' => 'form-control', 'placeholder' => 'To Phone', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('body_content', 'Body Content :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('body_content', null, ['class' => 'form-control', 'placeholder' => 'Body Content', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('media_url', 'Media Url :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('media_url', null, ['class' => 'form-control', 'placeholder' => 'Media Url', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('status', 'Status :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('message_id', 'Message Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('message_id', null, ['class' => 'form-control', 'placeholder' => 'Message Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('from_phone', 'From Phone :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('from_phone', null, ['class' => 'form-control', 'placeholder' => 'From Phone', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('notes', 'Notes :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'required' => 'required']) }}
    </div>
</div>