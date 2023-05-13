@extends('todos.layout')
@section('content')

    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h2>Todo Application</h2>
                    </div>
                    <div class="card-body ">
                        <a href="{{ url('/todo/create') }}" class="btn btn-success btn-sm " title="Add New Todo">
                            Add New 
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>TaskId</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($todo as $Items) 
                                    <tr class="highlight-row">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Items->title }}</td>
                                        <td>{{ $Items->description }}</td>
                                        <td>{{ $Items->date }}</td>
                                        <td>
                                            <button class="btn btn-success" onclick="highlightRow(this)"><i class="fa fa-check" aria-hidden="true"></i> Complete</button>
                                            <button class="btn btn-warning" onclick="dehighlightRow(this)"><i class="fa fa-times" aria-hidden="true"></i>Incomplete</button>
                                            <a href="{{ url('/todo/' . $Items->id . '/edit') }}" title="Edit"><button class="btn btn-primary "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            </div>
                                                <form method="POST" action="{{ url('/todo' . '/' . $Items->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger" title="Delete " onclick="return confirm ("Confirm delete?") "><i class="fa fa-check" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            </td>
                                    </tr>
                                
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url('/home') }}" class="btn btn-dark btn-sm " title="Add New Todo">
            BACK 
        </a>
    </div>
@endsection

<script>
    function highlightRow(button) {
    var row = button.closest('tr');
    row.classList.add('bg-complete');
}

function dehighlightRow(button) {
    var row = button.closest('tr');
    row.classList.add('bg-incomplete');
}
</script>

<style>
    .bg-complete {
    background-color: #2bd352;
    color: #fff;
    }
    .bg-incomplete {
    background-color: #d32b2b;
    color: #fff;
    }

</style>