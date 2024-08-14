@extends ('backend.layouts.app')

@section ('title', isset($repository->moduleTitle) ? 'Create - '. $repository->moduleTitle : 'Create')

@section('page-header')
<h1>
    {{ isset($repository->moduleTitle) ? $repository->moduleTitle : '' }}
    <small>Create</small>
</h1>
@endsection

@section('content')



{{ Form::open([
        'name'      => 'patien-report',
        'id'        => 'patien-report',
        'route'     => $repository->getActionRoute('storeRoute'),
        'class'     => 'form-horizontal',
        'role'      => 'form',
        'method'    => 'post',
    ])}}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Create {{ isset($repository->moduleTitle) ? $repository->moduleTitle : '' }}</h3>

        <div class="card-tools pull-right">
            @include('common.'.strtolower($repository->moduleTitle).'.header-buttons', [
            'listRoute' => $repository->getActionRoute('listRoute'),
            'createRoute' => $repository->getActionRoute('createRoute')
            ])
        </div>
    </div>

    <div class="card-body">
        {{-- Module Form --}}
        @include('common.'.strtolower($repository->moduleTitle).'.form')
    </div>

    <div class="card-footer">
        <div class="card-tools text-right">
            <a href="javascript:void(0);" onclick="confirmForm();" class="btn btn-success btn-xs">Save</a> 
            {{ link_to_route($repository->getActionRoute('listRoute'), 'Cancel', [], ['class' => 'btn btn-danger btn-xs']) }}
        </div>
        <div class="clearfix"></div>
    </div>
</div>
{{ Form::close() }}

<script type="text/javascript">
    function confirmForm()
    {
        if(validateForm())
        {
            var total = 0;
            var html  = '<ul>';

            jQuery('.report_type:checkbox:checked').each(function () {
                if(this.checked)
                {
                    html +=  '<li>' + $(this).attr('data-title') + ' - ' + $(this).attr('data-cost') + '</li>';
                    total = total + parseFloat($(this).attr('data-cost'));
                }
            });

            html += '<li>Total: '+total+'</li></ul>';

            swal({
                title: "Please Confirm",
                text: html,
                type: "warning",
                html: true,
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, I am sure!',
                cancelButtonText: "No, cancel it!",
                closeOnConfirm: false,
                closeOnCancel: false
             },
             function(isConfirm)
             {
               if (isConfirm){
                 swal("Yeah!", "Reports locked successfully.", "success");
                 setTimeout(function() {
                    $("#patien-report").submit();
                 }, 1000);
                } else {
                  swal("Cancelled", "Please Try Again :)", "error");
                  return false;
                }
             });
        }

    }

    function validateForm()
    {
        if($("#name").val().length < 1)
        {
            swal('Oh!', 'Please enter valid Name', 'error');
            $("#name").focus();
            return false;
        }

        if($("#age").val().length < 1)
        {
            swal('Oh!', 'Please enter valid Age', 'error');
            $("#age").focus();
            return false;
        }

        if($("#mobile").val().length < 1)
        {
            swal('Oh!', 'Please enter valid mobile', 'error');
            $("#mobile").focus();
            return false;
        }
        
        if($("#gender").val().length < 1)
        {
            swal('Oh!', 'Please select valid Gender', 'error');
            return false;
        }

        return true;
    }


    function manageCollectorOpt()
    {
        jQuery("#collectorContainer").hide();

        if(jQuery("#collect_sample").val() == 1)
        {
            jQuery("#collectorContainer").show();
        }
    }


    
</script>
@endsection

@section('after-scripts')
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery("#collected_at").datetimepicker()
    })
</script>
@endsection