@extends('todos.layout')
@section('content')
  
<div class="card" style="margin:20px;">
    <div class="card-header">Add New Todos</div>
        <div class="card-body">

            <form action="{{ url('todo') }}" method="post">
                {!! csrf_field() !!}
                <label>Title</label></br>
                <input type="text" name="title" id="title" class="form-control"></br>
                <label>Description</label></br>
                <input type="text" name="description" id="description" class="form-control"></br>
                <label>Due Date</label></br>
                <input type="date" name="date" id="date" class="form-control"></br>
                <input type="submit" value="Add" class="btn btn-success"></br>
            </form>
        </div>
</div>
@stop