
@extends('admin.Layout.app')

@section('main-content')

<div class="tab-content">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">

                <!-- /.box -->

                <div class="box" style="padding: 10px">
                    <div align="right" style="padding: 10px">
                        <a href="{{route('job.create')}}">
                            <span class=" btn btn-sm btn-success" title="Create new job">Create Job</span>
                        </a>
                    </div>



                    <div class="box-header">
                        <h3 class="box-title">List of Jobs</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

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
                                <th>Remark</th>


                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($jobs))
                                @foreach($jobs as $row)
                                    <tr>
                                        <td>{{$row->category_id }}</td>
                                        <td>{{$row->company_name }}</td>
                                        <td>{{$row->name }}</td>
                                        <td>{{$row->opening }}</td>
                                        <td>{{$row->salary }}</td>
                                        <td>{{$row->job_location }}</td>

                                        <td>
                                            <a href="{{route('job.show',$row->id)}}">
                                                <button class="btn btn-primary pad" data-toggle="popover" data-trigger="hover"
                                                        data-placement="top" data-content="Edit the current product"><i class="fa fa-folder-open"  ></i></button>
                                            </a>
                                            <a href="{{route('job.edit',$row->id)}}">
                                                <button class="btn btn-warning pad" data-toggle="popover" data-trigger="hover"
                                                        data-placement="top" data-content="Edit the current product"><i class="fa fa-edit"  ></i></button>
                                            </a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['job.destroy', $row->id]]) !!}
                                            <button type="submit" class="btn btn-danger glyphicon glyphicon-trash pad"  data-toggle="popover" data-trigger="hover"
                                                    data-placement="top" data-content="Delete the current product"
                                                    onclick="return confirm('Are you sure you want to delete this item?');">

                                            </button>
                                            {!! Form::close() !!}


                                        </td>
                                    </tr>
                                @endforeach
                            @endif



                            </tbody>

                        </table>
                    </div>

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
