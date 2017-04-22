@extends('admin.Layout.app')

@section('main-content')

    <div class=" col-md-8 col-md-offset-2">
        <h3>Edit Job</h3>
        <div class="box box-info clearfix pad">

            {!! Form::model($job,array('route'=>['job.update',$job->id],'method'=>'PUT'))!!}
            {{ csrf_field() }}

            <div class="form-group clearfix">
                <label for="category" class="col-sm-4 control-label">Category</label>
                <div class="col-md-8">
                    <select name="category_id" class="form-control" required>
                        <option selected="selected" disabled>Choose Category</option>

                        <option value="Civil Engineer">Civil Engineer</option>
                        <option value="Mechanical Engineer">Mechanical Engineer</option>
                        <option value="Computer Engineer">Computer Engineer</option>
                        <option value="Computer Engineer">Computer Engineer</option>
                        <option value="Fashion Designer">Fashion Designer</option>
                        <option value="Management">Management</option>
                        <option value="Teaching">Teaching</option>
                        <option value="Fashion Designer">Fashion Designer</option>
                    </select>
                </div>
            </div>


            <div class="form-group clearfix">
                <label for="company_name" class="col-sm-4 control-label">Company Name</label>
                <div class="col-sm-8">
                    {{ Form::text('company_name',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="job_location" class="col-sm-4 control-label">Job Location</label>
                <div class="col-sm-8">
                    {{ Form::text('job_location',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="name" class="col-sm-4 control-label">Job Name</label>

                <div class="col-sm-8">
                    {{ Form::text('name',null,array('class'=>'form-control'))}}
                </div>
            </div>
            
            <div class="form-group clearfix">
                <label for="opening" class="col-sm-4 control-label">Opening</label>
                <div class="col-sm-8">
                    {{ Form::number('opening',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="short_description" class="col-sm-4 control-label">Short Description</label>
                <div class="col-sm-8">
                    {{ Form::text('short_description',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="total_description" class="col-sm-4 control-label">Total Description</label>
                <div class="col-sm-8">
                    {{ Form::text('total_description',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="requirement" class="col-sm-4 control-label">Requirement</label>
                <div class="col-sm-8">
                    {{ Form::text('requirement',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="salary" class="col-sm-4 control-label">Salary</label>
                <div class="col-sm-8">
                    {{ Form::text('salary',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="education" class="col-sm-4 control-label">Education</label>
                <div class="col-sm-8">
                    {{ Form::text('education',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="experience" class="col-sm-4 control-label">Experience</label>
                <div class="col-sm-8">
                    {{ Form::text('experience',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="working_hours" class="col-sm-4 control-label">Working Hours</label>
                <div class="col-sm-8">
                    {{ Form::text('working_hours',null,array('class'=>'form-control'))}}
                </div>
            </div>

            <div class="form-group clearfix">
                <label for="job_display_duration" class="col-sm-4 control-label">Job Display Duration</label>
                <div class="col-sm-8">
                    {{ Form::text('job_display_duration',null,array('class'=>'form-control'))}}
                </div>
            </div>
            <div class="clearfix " align="right">
                {{Form::submit('Save Changes', array('class'=>'btn btn-primary btn-sm ','title'=>'Save the changes '))}}
                <a type="button" class="btn btn-warning  btn-sm" href="/admin/job">Cancel</a>
                {!! Form::close() !!}
            </div>

        </div>

    </div>
    </div>
    </div>
@endsection
