@php
    //dd($item);
@endphp
<style>
    .profile-table-image {
    width: 170px;
    height: 170px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #e5e7eb;
    padding: 2px;
    background: #fff;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
    }
</style>
<div class="container-fluid">
    <div class="row g-4">

        {{-- ================= PERSONAL DETAILS ================= --}}
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header fw-bold">Personal Details</div>
                <div class="card-body row g-3">

                    <div class="col-md-6">
                        {{ Form::label('firstname', 'First Name') }}
                        {{ Form::text('firstname', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('surname', 'Surname') }}
                        {{ Form::text('surname', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('gender', 'Gender') }}
                        {{ Form::select('gender', ['Male'=>'Male','Female'=>'Female'], null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('birthdate', 'Birthdate') }}
                        {{ Form::date('birthdate', null, ['class'=>'form-control']) }}
                    </div>

                </div>
            </div>
        </div>

        {{-- ================= PROFESSIONAL DETAILS ================= --}}
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header fw-bold">Professional Details</div>
                <div class="card-body row g-3">

                    <div class="col-md-6">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('profile_tag_id', 'Profile Tag') }}
                        {{ Form::select('profile_tag_id', $profileTags ?? [], null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('gotra_id', 'Gotra') }}
                        {{ Form::select('gotra_id', getGotraOptions(),  isset($item) && $item ?  $item->gotra_id : null, ['class'=>'form-control']) }}
                    </div>
                    <div class="col-md-6">
                        {{ Form::label('is_paid', 'Paid') }}
                        {{ Form::select('is_paid', [1=>'Yes',0=>'No'], null, ['class'=>'form-control']) }}
                    </div>
                </div>
            </div>
        </div>

        


        {{-- ================= CONTACT DETAILS ================= --}}
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header fw-bold">Contact Details</div>
                <div class="card-body row g-3">

                    <div class="col-md-6">
                        {{ Form::label('primary_mobile', 'Primary Mobile') }}
                        {{ Form::text('primary_mobile', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('business_mobile', 'Business Mobile') }}
                        {{ Form::text('business_mobile', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('contact_visibility', 'Visibility') }}
                        {{ Form::select('contact_visibility', [1=>'Public',0=>'Private'], null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('address_line1', 'Address Line 1:') }}
                        {{ Form::text('address_line1', isset($item) && $item ?  $item->primaryAddress->address_line1 : null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('address_line2', 'Address Line 2:') }}
                        {{ Form::text('address_line2', isset($item) && $item ?  $item->primaryAddress->address_line2 : null, ['class'=>'form-control']) }}
                    </div>
                
                    <div class="col-md-6">
                        {{ Form::label('city_id', 'City:') }}
                        {{ Form::select('city_id', getCityOptions(), isset($item) && $item ?  $item->primaryAddress->city_id : null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('state', 'State:') }}
                        {{ Form::select('state_id', getStateOptions(), isset($item) && $item ?  $item->primaryAddress->state_id : null, ['class'=>'form-control']) }}
                    </div>

                </div>
            </div>
        </div>

        {{-- ================= IMAGES ================= --}}
        <div class="col-md-6">
            <div class="card shadow-sm h-100">
                <div class="card-header fw-bold">Images</div>
                <div class="card-body row g-3">

                    <div class="col-md-12 text-center">
                        <label class="fw-semibold mb-2">Profile Image</label>
                        @if(isset($item) && $item->profile_image)
                            <div class="text-center">
                                <a target="_blank" href="{!! $item->profile_image !!}"><img
                                    src="{!! $item->profile_image !!}"
                                    alt="Profile"
                                    class="profile-table-image"
                                ></a>
                            </div>
                        @endif
                        {{ Form::file('profile_image', ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-12 text-center">
                        <label class="fw-semibold mb-2">Banner Image</label>
                        @if(isset($item) && $item->banner_image)
                            <div class="text-center">
                                <a target="_blank" href="{!! $item->banner_image !!}"><img
                                    src="{!! $item->banner_image !!}"
                                    alt="Profile"
                                    class="profile-table-image"
                                ></a>
                            </div>
                        @endif
                        {{ Form::file('banner_image', ['class'=>'form-control']) }}
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-12">
            {{ Form::label('tags', 'Tags') }}

            <select name="tags[]" id="tags" class="form-control" multiple>
                @foreach($profileTags as $tagId => $tagTitle)
                    <option value="{{ $tagId }}">{{ $tagTitle }}</option>
                @endforeach
            </select>
        </div>
            {{-- ===== BASIC PROFESSIONAL ===== --}}
            <div class="col-md-6">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title',  null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('profile_tag_id', 'Profile Tag') }}
                {{ Form::select('profile_tag_id', $profileTags ?? [], null, ['class'=>'form-control']) }}
            </div>

            {{-- ===== EDUCATION & JOB ===== --}}
            <div class="col-md-6">
                {{ Form::label('education', 'Education') }}
                {{ Form::text('education', isset($item) && $item ?  $item->profession->education :  null, ['class'=>'form-control', 'placeholder'=>'e.g. B.Tech, MBA']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('occupation', 'Occupation') }}
                {{ Form::text('occupation', isset($item) && $item ?  $item->profession->occupation : null, ['class'=>'form-control', 'placeholder'=>'e.g. Developer, CA']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('company', 'Company') }}
                {{ Form::text('company', isset($item) && $item ?  $item->profession->company : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('job_title', 'Job Title') }}
                {{ Form::text('job_title', isset($item) && $item ?  $item->profession->job_title : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-4">
                {{ Form::label('experience', 'Total Experience (Years)') }}
                {{ Form::text('experience', isset($item) && $item ?  $item->profession->overall_experience : null, ['class'=>'form-control']) }}
            </div>

            {{-- ===== STATUS FLAGS ===== --}}
            <div class="col-md-2">
                {{ Form::label('is_student', 'Student?') }}
                {{ Form::select('is_student', [0=>'No', 1=>'Yes'], 
                isset($item) && $item ?  $item->profession->is_student :null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-2">
                {{ Form::label('is_retired', 'Retired ?') }}
                {{ Form::select('is_retired', [0=>'No',1=>'Yes'], isset($item) && $item ?  $item->profession->is_retired : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-2">
                {{ Form::label('is_job_seeker', 'Looking for Job?') }}
                {{ Form::select('is_job_seeker', [0=>'No',1=>'Yes'], isset($item) && $item ?  $item->profession->is_open : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-2">
                {{ Form::label('is_government_job', 'Government Job?') }}
                {{ Form::select('is_government_job', [0=>'No',1=>'Yes'],  isset($item) && $item ?  $item->profession->is_government : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-1">
                {{ Form::label('is_business', 'Business?') }}
                {{ Form::select('is_business', [0=>'No',1=>'Yes'], isset($item) && $item ?  $item->profession->is_business : null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-3">
                {{ Form::label('business_title', 'Business Title') }}
                {{ Form::text('business_title',  isset($item) && $item ?  $item->profession->business_title : null, ['class'=>'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('business_details', 'Business Details') }}
                {{ Form::text('business_details', isset($item) && $item ?  $item->profession->business_details : null, ['class'=>'form-control']) }}
            </div>
            <div class="col-md-2">
                {{ Form::label('business_started', 'Business Established') }}
                {{ Form::text('business_started', isset($item) && $item ?  $item->profession->business_started : null, ['class'=>'form-control']) }}
            </div>
            <div class="col-md-3">
                {{ Form::label('business_website', 'Business Website') }}
                {{ Form::text('business_website', isset($item) && $item ?  $item->profession->business_website : null, ['class'=>'form-control']) }}
            </div>


        </div>
        <div class="row">

        <div class="col-md-2">
            {{ Form::label('member_type', 'Type') }}
            {{ Form::select('member_type', [
                1 => 'Head of Family',
                2 => 'Super Senior',
                3 => 'Senior Member',
                4 => 'NRI',
                5 => 'Youth',
                6 => 'Child',
                0 => 'Late',
            ], null, ['class'=>'form-control']) }}
        </div>
        <div class="col-md-2">
            {{ Form::label('priority', 'Priority') }}
            {{ Form::select('priority', [
            0 => 'General',
            1 => 'Premium',
            2 => 'Exclusive',
        ], null, ['class'=>'form-control']) }}
        </div>


        <div class="col">
                        {{ Form::label('admin_notes', 'Admin Notes') }}
                        {{ Form::textarea('admin_notes', null, ['class'=>'form-control','rows'=>2]) }}
                    </div>

    </div>
</div>