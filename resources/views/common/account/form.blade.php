<?php
/*
<div class="form-group">
    {{ Form::label('user_id', 'User Id :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('user_id', null, ['class' => 'form-control', 'placeholder' => 'User Id', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('status', 'Status :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('status', null, ['class' => 'form-control', 'placeholder' => 'Status', 'required' => 'required']) }}
    </div>
</div><div class="form-group">
    {{ Form::label('notes', 'Notes :', ['class' => 'col-lg-2 control-label']) }}
    <div class="col-lg-10">
        {{ Form::text('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'required' => 'required']) }}
    </div>
</div>
*/?>

<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create Account</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                {{ Form::label('title', 'Title :', ['class' => 'col-lg-6 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('notes', 'Notes :', ['class' => 'col-lg-6 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' => 'Notes', 'rows' => 3]) }}
                </div>
            </div>
        </div>

         <div class="card-footer">
            <div class="form-group row">
                {{ Form::label('name', 'Name :', ['class' => 'col-lg-6 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::text('name', $item->user->name ?? null, ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('email', 'Email :', ['class' => 'col-lg-6 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::email('email', $item->user->email ?? null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) }}
                </div>
            </div>

            @if(!isset($item->user->name))
                <div class="form-group row">
                    {{ Form::label('password', 'Password :', ['class' => 'col-lg-6 control-label']) }}
                    <div class="col-lg-10">
                        {{ Form::password('password',  ['class' => 'form-control', 'placeholder' => 'XXXXXX', 'required' => 'required']) }}
                    </div>
                </div>
            @endif
        </div>
    </div>
    </div>
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Basic Configurations</h3>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    {{ Form::label('is_watsapp', 'Watsapp :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::select('is_watsapp', [
                            1 => 'YES',
                            0 => 'NO'
                        ], null, ['class' => 'form-control', 'placeholder' => 'Active Watsapp', 'required' => 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                    {{ Form::label('is_email', 'Email :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::select('is_email', [
                            1 => 'YES',
                            0 => 'NO'
                        ],null, ['class' => 'form-control', 'placeholder' => 'Active Email', 'required' => 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                    {{ Form::label('email_host', 'Email Host :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('email_host', null, ['class' => 'form-control', 'placeholder' => 'Email Host', 'required' => 'required']) }}
                    </div>
                </div>
                <div class="form-group row">
                {{ Form::label('email_password', 'Email Password :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('email_password', null, ['class' => 'form-control', 'placeholder' => 'Email Password', 'required' => 'required']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('monthly_limit', 'Monthly Limit :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('monthly_limit', $item->monthly_limit ?? 30000, ['class' => 'form-control', 'placeholder' => 'Monthly Limit', 'required' => 'required']) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('daily_limit', 'Daily Limit :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('daily_limit', $item->daily_limit ?? 1000, ['class' => 'form-control', 'placeholder' => 'Daily Limit', 'required' => 'required']) }}
                </div>
            </div>
            <div class="form-group row">
                {{ Form::label('wa_template_url', 'WhatsApp Template :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('wa_template_url', null, ['class' => 'form-control', 'placeholder' => 'Wa Template Url', 'required' => 'required']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('wa_template_id', 'WhatsApp Template Id :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('wa_template_id', null, ['class' => 'form-control', 'placeholder' => 'Wa Template Id', 'required' => 'required']) }}
                </div>
            </div>

            <div class="form-group row">
                {{ Form::label('wa_phone_number', 'WhatsApp Phone Number :', ['class' => 'col-lg-3 control-label']) }}
                <div class="col-lg-9">
                    {{ Form::text('wa_phone_number', null, ['class' => 'form-control', 'placeholder' => 'Wa Phone Number', 'required' => 'required']) }}
                </div>
            </div>
            </div>    
        </div>
    </div>
</div>
