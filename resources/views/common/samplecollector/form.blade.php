<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Basic Information
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                     {{ Form::label('name', 'Name :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('mobile', 'Mobile :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'Mobile', 'required' => 'required']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Other Details
                </div>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    {{ Form::label('address', 'Address :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('email', 'Email :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required']) }}
                    </div>
                </div>

                <div class="form-group row">
                    {{ Form::label('other_mob_number', 'Other Mobile :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::text('other_mob_number', null, ['class' => 'form-control', 'placeholder' => 'Other Mob Number', 'required' => 'required']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>