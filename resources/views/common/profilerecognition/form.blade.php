<div class="form-group">
    {{ Form::label('external_link_title', 'External Link Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('external_link_title', null, ['class' => 'form-control', 'placeholder' => 'External Link Title', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('external_links', 'External Links :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('external_links', null, ['class' => 'form-control', 'placeholder' => 'External Links', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('icon', 'Icon :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('icon', null, ['class' => 'form-control', 'placeholder' => 'Icon', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('notes', 'Notes :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
    </div>
</div>