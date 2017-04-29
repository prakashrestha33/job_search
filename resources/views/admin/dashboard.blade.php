@extends('admin.Layout.app')

@section('main-content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Dashboard</li>
        </ul><!-- /.breadcrumb -->


    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <div class="row" style="padding-top: 50px">
                    <div class="col-xs-12 col-sm-5 widget-container-col ui-sortable" id="widget-container-col-5">
                        <div class="widget-box ui-sortable-handle center" id="widget-box-5">
                            <div class="widget-header">
                                <h5 class="widget-title smaller">JOBS</h5>

                                <div class="widget-toolbar">
                                    <span class="badge badge-danger"><h1>@isset($jobno){{count($jobno)}}@endisset</h1></span>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main padding-6">
                                    <div class="alert alert-info"> Total no. of jobs </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-5 widget-container-col ui-sortable" id="widget-container-col-6">
                        <div class="widget-box widget-color-dark light-border  center ui-sortable-handle" id="widget-box-6">
                            <div class="widget-header">
                                <h5 class="widget-title smaller">JOB SEEKERS</h5>

                                <div class="widget-toolbar">
                                    <span class="badge badge-danger"> <h1>@isset($jobseekerno){{count($jobseekerno)}}@endisset</h1></span>
                                </div>
                            </div>

                            <div class="widget-body">
                                <div class="widget-main padding-6">
                                    <div class="alert alert-info"> Total No. of JobSeekers </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--<div class="col-xs-12 col-sm-6 widget-container-col ui-sortable" id="widget-container-col-7">--}}
                        {{--<div class="widget-box widget-color-dark ui-sortable-handle" id="widget-box-7">--}}
                            {{--<div class="widget-header widget-header-small">--}}
                                {{--<h6 class="widget-title smaller">With Labels &amp; Badges</h6>--}}

                                {{--<div class="widget-toolbar no-border">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" class="ace ace-switch ace-switch-3">--}}
                                        {{--<span class="lbl middle"></span>--}}
                                    {{--</label>--}}
                                {{--</div>--}}

                                {{--<div class="widget-toolbar">--}}
														{{--<span class="label label-warning">--}}
															{{--1.2%--}}
															{{--<i class="ace-icon fa fa-arrow-down"></i>--}}
														{{--</span>--}}
                                    {{--<span class="badge badge-info">info</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="widget-body">--}}
                                {{--<div class="widget-main">--}}
                                    {{--<div class="alert alert-info">--}}
                                        {{--Lorem ipsum dolor sit amet, consectetur adipiscing.--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>

@endsection
