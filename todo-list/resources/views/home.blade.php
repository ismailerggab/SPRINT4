@extends('lyaout')

@section('contant')
<div class="container">
    <div class="d-flex p-2 ">
        <div class="col-md-8">
            <div class="card">
                <div><a class="btn btn-success"  href="create">Add Something To Do</a></div>

                    <table class="table table-dark table-striped">
                        <tr>
                            <td>Id</td>
                            <td>Task</td>
                            <td>Created At</td>
                            <td>Action</td>
                        </tr>
        
                        @foreach($TodoArr as $todo)
                        <tr>
                            <td>{{$todo->id}}</td>
                            <td>{{$todo->name}}</td>
                            <td>{{$todo->created_at}}</td>
                            <td><a class="btn btn-danger" href="delete/{{$todo->id}}">Delete</a> | <a class="btn btn-warning" href="edit/{{$todo->id}}">Edit</a> </td>
                        </tr>
        
                             
                        @endforeach
                    
                    </table>
                 
               
            </div>
        </div>
    </div>
</div>
@endsection
