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
                        {{ Form::label('is_paid', 'Paid') }}
                        {{ Form::select('is_paid', [1=>'Yes',0=>'No'], null, ['class'=>'form-control']) }}
                    </div>


                    <div class="col-md-12">
                        {{ Form::label('admin_notes', 'Admin Notes') }}
                        {{ Form::textarea('admin_notes', null, ['class'=>'form-control','rows'=>2]) }}
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
                        {{ Form::text('address_line1', null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('address_line2', 'Address Line 2:') }}
                        {{ Form::text('address_line2', null, ['class'=>'form-control']) }}
                    </div>
                
                    <div class="col-md-6">
                        {{ Form::label('city_id', 'City:') }}
                        {{ Form::select('city_id', getCityOptions(), null, ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-6">
                        {{ Form::label('state', 'State:') }}
                        {{ Form::select('state_id', getStateOptions(), null, ['class'=>'form-control']) }}
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
                        {{ Form::file('profile_image', ['class'=>'form-control']) }}
                    </div>

                    <div class="col-md-12 text-center">
                        <label class="fw-semibold mb-2">Banner Image</label>
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
                {{ Form::text('title', null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('profile_tag_id', 'Profile Tag') }}
                {{ Form::select('profile_tag_id', $profileTags ?? [], null, ['class'=>'form-control']) }}
            </div>

            {{-- ===== EDUCATION & JOB ===== --}}
            <div class="col-md-6">
                {{ Form::label('education', 'Education') }}
                {{ Form::text('education', null, ['class'=>'form-control', 'placeholder'=>'e.g. B.Tech, MBA']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('occupation', 'Occupation') }}
                {{ Form::text('occupation', null, ['class'=>'form-control', 'placeholder'=>'e.g. Developer, CA']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('company', 'Company') }}
                {{ Form::text('company', null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('job_title', 'Job Title') }}
                {{ Form::text('job_title', null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-6">
                {{ Form::label('experience', 'Total Experience (Years)') }}
                {{ Form::number('experience', null, ['class'=>'form-control', 'min'=>0, 'step'=>'0.1']) }}
            </div>

            {{-- ===== STATUS FLAGS ===== --}}
            <div class="col-md-4">
                {{ Form::label('is_student', 'Student?') }}
                {{ Form::select('is_student', [1=>'Yes',0=>'No'], null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-4">
                {{ Form::label('is_job_seeker', 'Looking for Job?') }}
                {{ Form::select('is_job_seeker', [1=>'Yes',0=>'No'], null, ['class'=>'form-control']) }}
            </div>

            <div class="col-md-4">
                {{ Form::label('is_government_job', 'Government Job?') }}
                {{ Form::select('is_government_job', [1=>'Yes',0=>'No'], null, ['class'=>'form-control']) }}
            </div>


    </div>
</div>