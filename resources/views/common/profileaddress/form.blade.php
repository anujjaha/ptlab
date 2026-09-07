<div class="form-group">
    {{ Form::label('profile_id', 'Profile Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('profile_id', null, ['class' => 'form-control', 'placeholder' => 'Profile Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('address_line1', 'Address Line1 :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('address_line1', null, ['class' => 'form-control', 'placeholder' => 'Address Line1', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('address_line2', 'Address Line2 :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('address_line2', null, ['class' => 'form-control', 'placeholder' => 'Address Line2', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('city_id', 'City Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('city_id', null, ['class' => 'form-control', 'placeholder' => 'City Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('state_id', 'State Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('state_id', null, ['class' => 'form-control', 'placeholder' => 'State Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('pin', 'Pin :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('pin', null, ['class' => 'form-control', 'placeholder' => 'Pin', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('is_current', 'Is Current :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('is_current', null, ['class' => 'form-control', 'placeholder' => 'Is Current', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('is_own', 'Is Own :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('is_own', null, ['class' => 'form-control', 'placeholder' => 'Is Own', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('rent', 'Rent :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('rent', null, ['class' => 'form-control', 'placeholder' => 'Rent', 'required' => 'required']) }}
    </div>
</div>