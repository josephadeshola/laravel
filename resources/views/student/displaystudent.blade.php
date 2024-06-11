@extends('nav')

@section('main')
    <div class="container ">
        <div class="row  shadow col-12 mx-4">
            @foreach ($student as $eachstudent)
                <div>{{$eachstudent->full_name}}</div>
                <div>{{$eachstudent->phonenumber}}</div>
                <div>{{$eachstudent->email}}</div>
                <div>{{$eachstudent->address}}</div>
                <div class="col-3">
                    <button class="btn btn-primary" href="">Edit</button>
                </div>
                <div class="col-3"><button class="btn btn-danger" href="">Delete</button></div>
            @endforeach
        </div>


     </div>    
@endsection