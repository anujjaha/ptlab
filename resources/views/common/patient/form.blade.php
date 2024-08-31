<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<link
  rel="stylesheet"
  href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css"
  type="text/css"
/>
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Patient Information
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

                <div class="form-group row">
                    {{ Form::label('is_wa', 'WhatsApp :', ['class' => 'col-lg-3 control-label']) }}
                    <div class="col-lg-9">
                        {{ Form::select('is_wa', [
                            '1' => 'Yes',
                            '0' => 'No',
                        ], null, ['class' => 'form-control', 'placeholder' => 'Send WA', 'required' => 'required']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
                <div class="card-title">
                    Upload Report
                </div>
            </div>
            <div class="card-body">
                <div class="card-tools pull-right">
                    <div id="dropZoneContainer">
                       <div style="min-height: 50px !important;" class="dropzone" id="dropzone_field"></div>
                       <center>
                       <a href="javascript:void(0);" onclick="uploadReportBtn()" class="m-2 btn-xs btn btn-success">
                       Upload</a>
                       </center>
                       <hr />
                       <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>