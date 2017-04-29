@extends('admin.Layout.app')

@section('main-content')

    <div class="panel-body">
      <div>
          <label>Uploaded At:</label>  {{$cvs->created_at}}
          <div>

          </div>
          {{--ln -s ~/base/job_search/storage/app/public/cv ~/base/job_search/public/storage/--}}
          <img  style="border: dotted"  height="100%"
               width="90%" src="{{asset('storage/cv')}}/{{($cvs->cv_image)}}">

      </div>
    </div>


@endsection
