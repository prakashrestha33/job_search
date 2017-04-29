@extends('admin.Layout.app')

@section('main-content')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="">JobSeekers</li>
            <li class="active">CV</li>
        </ul><!-- /.breadcrumb -->


    </div>
    <div class="panel-body">
        @if(isset($cvs))
      <div>
          <label>Uploaded At:</label>  {{$cvs->created_at}}
          <div>

          </div>
          {{--ln -s ~/base/job_search/storage/app/public/cv ~/base/job_search/public/storage/--}}
          <img  style="border: dotted"  height="100%"
               width="90%" src="{{asset('storage/cv')}}/{{($cvs->cv_image)}}">

      </div>
            @else
            <h1>The Job seeker have not uploaded the <strong>CV</strong> yet.</h1>
            @endif
    </div>


@endsection
