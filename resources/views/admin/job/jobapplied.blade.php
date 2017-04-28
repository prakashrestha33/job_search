
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
                        <h3 class="box-title">List of Jobs Applied</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">

                        <table id="example1"
                               class="table table-striped table-bordered dt-responsive  table-responsive "
                               cellspacing="0" width="100%">
                            <thead>
                            <tr>

                                <th>UserId</th>
                                <th>User</th>

                                <th>email</th>
                                <th>Job Name</th>



                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($jobapplied))
                                @foreach($jobapplied as $row)
                                    <tr>
                                        <td>{{$row->id }}</td>
                                        <td>{{$row->name }}</td>
                                        <td>{{$row->email }}</td>
                                        <td>{{$row->jobname }}</td>


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
