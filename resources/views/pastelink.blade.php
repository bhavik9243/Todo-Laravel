@extends('app.layout')

@section('content')
	<div class="wrapper1">
         <div class="add_task">
            <form action="{{ route('postLink') }}" method="post">
               {{ csrf_field() }}
               <input type="text" name="pastelink_name" placeholder="File Name" class="file_name{{ $errors->has('pastelink_name') ? ' alert_text' : '' }}" value="{{ Request::old('pastelink_name') }}">
               <input type="text" name="download_link" placeholder="Download Link" class="link_text{{ $errors->has('download_link') ? ' alert_text' : '' }}" value="{{ Request::old('download_link') }}">
               <input type="submit" value="Add">
            </form>
         </div>
      </div>
      
      @if ($links->count())
      <div class="wrapper2">
         <div class="container">
         @foreach ($links as $link)
            <div class="content clearfix">
               <a href="#" class="content_text">{{ $link->pastelink_name }}</a>
               <a href="{{ $link->download_link }}" target="_blank" class="go_text">Go</a>
               <form action="{{ route('postDelete_link') }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="link_delete" value="{{ $link->pastelink_id }}">
                  <button type="submit" class="delete">Delete</button>
               </form>
            </div>
         @endforeach
         </div>
      </div>
      @endif
@stop