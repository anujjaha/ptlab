<div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('tag_id', 'Tag Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('tag_id', null, ['class' => 'form-control', 'placeholder' => 'Tag Id', 'required' => 'required']) }}
    </div>
</div>