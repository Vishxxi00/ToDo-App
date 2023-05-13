@extends('todos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Todo</div>
  <div class="card-body">
    <form action="{{ url('todo/' .$todo->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$todo->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$todo->title}}" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="description" id="description" value="{{$todo->description}}" class="form-control"></br>
        <label>Due date</label></br>
        <input type="date" name="date" id="date" value="{{$todo->date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>

@stop