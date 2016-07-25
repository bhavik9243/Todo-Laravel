@extends('app.layout')

@section('content')
	<div class="wrapper1">
         <div class="add_task">
            <form action="{{ route('postTodo') }}" method="post">
               {{ csrf_field() }}
               <input type="text" name="todo_name" placeholder="Add New Task" class="{{ $errors->has('todo_name') ? 'alert_text' : '' }}" value="{{ Request::old('todo_name') }}">
               <input type="submit" value="Add">
            </form>
         </div>
      </div>
      
      @if ($todos->count())
      <div class="wrapper2">
         <div class="container">
         @foreach ($todos as $todo)
            <div class="content clearfix">
               <a href="#" class="content_text">{{ $todo->todo_name }}</a>
               <form action="{{ route('postDelete') }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="todo_delete" value="{{ $todo->todo_id }}">
                  <button type="submit" class="delete">Delete</button>
               </form>
            </div>
         @endforeach
         </div>
      </div>
      @endif
@stop