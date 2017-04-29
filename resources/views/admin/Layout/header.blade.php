<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta charset="utf-8"/>
    <title>Dashboard - Ace Admin</title>

    <meta name="description" content="overview &amp; stats"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>


    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::style('assets/font-awesome/4.5.0/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/fonts.googleapis.com.css') !!}
    {!! Html::style('assets/css/ace.min.css') !!}
    {!! Html::style('assets/css/ace-part2.min.css') !!}
    {!! Html::style('assets/css/ace-skins.min.css') !!}
    {!! Html::style('assets/css/ace-rtl.min.css') !!}
    {!! Html::script('assets/js/ace-extra.min.js') !!}
    {!! Html::script('assets/js/html5shiv.min.js') !!}
    {!! Html::script('assets/js/respond.min.js') !!}

</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">


        <div class="navbar-header pull-left">
            <a href="/dashboard" class="navbar-brand">
                <small>
                    Job Search
                    <i class="fa fa-search-plus"></i>

                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">


                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <span class="user-info">
                            ADMIN
								</span>

                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST">

                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>

<div class="main-container ace-save-state" id="main-container">

    <div id="sidebar" class="sidebar responsive  ace-save-state">


        <ul class="nav nav-list">
            <li class="active">
                <a href="/dashboard">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text"> Dashboard </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="/admin/jobseekers">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> Job Seekers </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="/admin/jobseekers/applied">
                    <i class="menu-icon fa fa-users"></i>
                    <span class="menu-text"> Job Applied </span>
                </a>

                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="/admin/job">
                    <i class="menu-icon fa fa-briefcase"></i>
                    <span class="menu-text"> Jobs </span>
                </a>

                <b class="arrow"></b>
            </li>
            @include('admin.Layout.notification')

        </ul><!-- /.nav-list -->

        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>

    <div class="main-content" style="
    background: rgba(144, 230, 218, 0.25);">
        <div class="main-content-inner">

