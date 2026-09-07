<div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('related_profile_id', 'Related Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('related_profile_id', null, ['class' => 'form-control', 'placeholder' => 'Related Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('relation_type', 'Relation Type :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('relation_type', null, ['class' => 'form-control', 'placeholder' => 'Relation Type', 'required' => 'required']) }}
    </div>
</div>