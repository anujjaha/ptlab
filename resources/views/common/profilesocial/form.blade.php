<div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('social_platform_id', 'Social Platform Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('social_platform_id', null, ['class' => 'form-control', 'placeholder' => 'Social Platform Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('social_url', 'Social Url :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('social_url', null, ['class' => 'form-control', 'placeholder' => 'Social Url', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('status', 'Status :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status', 'required' => 'required']) }}
    </div>
</div>