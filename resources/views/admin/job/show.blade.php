
@extends('admin.Layout.app')

@section('main-content')

<div class="tab-content">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box" style="padding: 10px">



                    <div class="box-header">
                        <h3 class="box-title">List of Jobs</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <td>
                            <a href="{{route('job.edit',$job->id)}}">
                                <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                        data-placement="top" data-content="Edit the current product"><i class="fa fa-edit"  ></i></button>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['job.destroy', $job->id]]) !!}
                            <button type="submit" class="btn btn-danger glyphicon glyphicon-trash pad"  data-toggle="popover" data-trigger="hover"
                                    data-placement="top" data-content="Delete the current product"
                                    onclick="return confirm('Are you sure you want to delete this item?');">

                            </button>
                            {!! Form::close() !!}


                        </td>
                        <table id="example1"
                               class="table table-striped table-bordered dt-responsive  table-responsive "
                               cellspacing="0" width="100%">
                            <thead>

                            <tr>

                                <th>Category</th>
                                <th>Company Name</th>
                                <th>Job Name</th>
                                <th>Opening</th>
                                <th>Salary</th>
                                <th>Job Location</th>


                            </tr>

                            </thead>
                            <tbody>

                                    <tr>
                                        <td>{{$job->category_id }}</td>
                                        <td>{{$job->company_name }}</td>
                                        <td>{{$job->name }}</td>
                                        <td>{{$job->opening }}</td>
                                        <td>{{$job->salary }}</td>
                                        <td>{{$job->job_location }}</td>



                                    </tr>




                            </tbody>

                        </table>
                    </div>
                    <table id="example1"
                           class="table table-striped table-bordered dt-responsive  table-responsive "
                           cellspacing="0" width="100%">
                        <thead>

                        <tr>

                            {{--<th>Category</th>--}}
                            {{--<th>Company Name</th>--}}
                            {{--<th>Job Name</th>--}}
                            {{--<th>Opening</th>--}}
                            {{--<th>Salary</th>--}}
                            {{--<th>Job Location</th>--}}
                            <th>Experience</th>
                            <th>Requirement</th>


                        </tr>

                        </thead>
                        <tbody>

                        <tr>
                            {{--<td>{{$job->category_id }}</td>--}}
                            {{--<td>{{$job->company_name }}</td>--}}
                            {{--<td>{{$job->name }}</td>--}}
                            {{--<td>{{$job->opening }}</td>--}}
                            {{--<td>{{$job->salary }}</td>--}}
                            {{--<td>{{$job->job_location }}</td>--}}
                            <td>{{$job->experience }}</td>
                            <td>{{$job->requirement }}</td>


                        </tr>




                        </tbody>

                    </table>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

    @stop
