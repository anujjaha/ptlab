<div class="form-group">
    {{ Form::label('account_id', 'Account Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('account_id', null, ['class' => 'form-control', 'placeholder' => 'Account Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('is_watsapp', 'Is Watsapp :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('is_watsapp', null, ['class' => 'form-control', 'placeholder' => 'Is Watsapp', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('is_email', 'Is Email :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('is_email', null, ['class' => 'form-control', 'placeholder' => 'Is Email', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('email_host', 'Email Host :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('email_host', null, ['class' => 'form-control', 'placeholder' => 'Email Host', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('email_password', 'Email Password :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('email_password', null, ['class' => 'form-control', 'placeholder' => 'Email Password', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('monthly_limit', 'Monthly Limit :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('monthly_limit', null, ['class' => 'form-control', 'placeholder' => 'Monthly Limit', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('daily_limit', 'Daily Limit :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('daily_limit', null, ['class' => 'form-control', 'placeholder' => 'Daily Limit', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('wa_template_url', 'Wa Template Url :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('wa_template_url', null, ['class' => 'form-control', 'placeholder' => 'Wa Template Url', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('wa_template_id', 'Wa Template Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('wa_template_id', null, ['class' => 'form-control', 'placeholder' => 'Wa Template Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('wa_phone_number', 'Wa Phone Number :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('wa_phone_number', null, ['class' => 'form-control', 'placeholder' => 'Wa Phone Number', 'required' => 'required']) }}
    </div>
</div>