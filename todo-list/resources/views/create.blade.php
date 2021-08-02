@extends('lyaout')

@section('contant')
    <a href="/">View To Do list</a>
    <div class="container text-center">
    
    

    <form action="todo_submit">
            <input type="text" name="name" placeholder="Enter to do list" class='form-control'>
            <input type="submit">
    </form>
    </div>
         
    @endsection
