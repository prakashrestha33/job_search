@extends('admin.Layout.app')

@section('main-content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="">Job</li>
            <li class="active">Create</li>
        </ul><!-- /.breadcrumb -->


    </div>
    <div class="col-md-8 col-md-offset-2 ">

        <h3>Create Job</h3>
        <div class="box box-info clearfix pad ">



            {!! Form::open(array('route'=>'job.store'))!!}
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



            <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }} clearfix">
                <label for="company_name" class="col-sm-4 control-label">Company Name</label>

                <div class="col-sm-8">
                    <input id="company_name" type="text" class="form-control" name="company_name" value="{{ old('company_name') }}" required
                           autofocus>

                    @if ($errors->has('company_name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('job_location') ? ' has-error' : '' }} clearfix">
                <label for="job_location" class="col-sm-4 control-label">Job Location</label>

                <div class="col-sm-8">
                    <input id="job_location" type="text" class="form-control" name="job_location" value="{{ old('job_location') }}" required
                           autofocus>

                    @if ($errors->has('job_location'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('job_location') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} clearfix">
                <label for="name" class="col-sm-4 control-label">Job Name</label>

                <div class="col-sm-8">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                           autofocus>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



            <div class="form-group{{ $errors->has('opening') ? ' has-error' : '' }} clearfix">
                <label for="opening" class="col-sm-4 control-label">Opening</label>

                <div class="col-sm-8">
                    <input id="opening" type="number" class="form-control" name="opening" value="{{ old('opening') }}" required
                           autofocus>

                    @if ($errors->has('opening'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('opening') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('short_description') ? ' has-error' : '' }} clearfix">
                <label for="short_description" class="col-sm-4 control-label"> Short Description</label>

                <div class="col-sm-8">
                <textarea id="short_description" type="text" class="form-control" name="short_description"
                          value="{{ old('short_description') }}" required autofocus>
</textarea>
                    @if ($errors->has('short_description'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('short_description') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
        <div class="form-group{{ $errors->has('total_description') ? ' has-error' : '' }} clearfix">
                <label for="total_description" class="col-sm-4 control-label"> Total Description</label>

                <div class="col-sm-8">
                <textarea id="total_description" type="text" class="form-control" name="total_description"
                          value="{{ old('total_description') }}" required autofocus>
</textarea>
                    @if ($errors->has('total_description'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('total_description') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('requirement') ? ' has-error' : '' }} clearfix">
                <label for="requirement" class="col-sm-4 control-label">Requirement</label>

                <div class="col-sm-8">
                    <input id="requirement" type="text" class="form-control" name="requirement" value="{{ old('requirement') }}" required
                           autofocus>

                    @if ($errors->has('requirement'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('requirement') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
             <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }} clearfix">
                <label for="salary" class="col-sm-4 control-label">Salary</label>

                <div class="col-sm-8">
                    <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required
                           autofocus>

                    @if ($errors->has('salary'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }} clearfix">
                <label for="education" class="col-sm-4 control-label">Education</label>

                <div class="col-sm-8">
                    <input id="education" type="text" class="form-control" name="education" value="{{ old('education') }}" required
                           autofocus>

                    @if ($errors->has('education'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }} clearfix">
                <label for="experience" class="col-sm-4 control-label">Experience</label>

                <div class="col-sm-8">
                    <input id="experience" type="text" class="form-control" name="experience" value="{{ old('experience') }}" required
                           autofocus>

                    @if ($errors->has('experience'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('working_hours') ? ' has-error' : '' }} clearfix">
                <label for="working_hours" class="col-sm-4 control-label">Working time</label>

                <div class="col-sm-8">
                    <input id="working_hours" type="text" class="form-control" name="working_hours" value="{{ old('working_hours') }}" required
                           autofocus>

                    @if ($errors->has('working_hours'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('working_hours') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group{{ $errors->has('job_display_duration') ? ' has-error' : '' }} clearfix">
                <label for="job_display_duration" class="col-sm-4 control-label">Job display Duration</label>

                <div class="col-sm-8">
                    <input id="job_display_duration" type="date" class="form-control" name="job_display_duration" value="{{ old('job_display_duration') }}" required
                           autofocus>

                    @if ($errors->has('job_display_duration'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('job_display_duration') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>
            {{Form::hidden('job_status',true)}}
            <div align="right" >
                {{Form::submit('Create Job', array('class'=>'btn btn-sm btn-primary ','title'=>'Save the job'))}}
                <a type="button" class="btn btn-sm btn-warning" href="/">Cancel</a>
                {!! Form::close() !!}
            </div>


        </div>
    </div>
    </div>
    </div>

@endsection