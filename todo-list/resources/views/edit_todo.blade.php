
        @extends('lyaout')

        @section('contant')
        <div class="container text-center mt-5">
    <a href="/">View To Do list</a>
    <div>
    <form action="../edit_submit/{{$TodoArr_name->id}}">
            <input type="text" name="name" value="{{$TodoArr_name->name}}" class='form-control'>
            <div><input class="btn btn-success mt-2"type="submit"></div>
    </form>
    </div>
</div>
    @endsection
