@extends('nav')
@section('main')
    
<div class="container">
    <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h1 class="text-center text-info">Student App</h3>
            <form action="/student" method="post">
                @csrf
                <input type="text"  name="fullname" class="form-control mt-3" placeholder="Full-Name">
                <input type="text"  name="phonenumber" class="form-control mt-3" placeholder="Phone-Number">
                <input type="text"  name="email" class="form-control mt-3" placeholder="Email">
                <input type="text"  name="password" class="form-control mt-3" placeholder="Password">
                <textarea name="address" id="" class="form-control mt-3" cols="30" rows="10" placeholder="Enter Address"></textarea>
                <button class="btn btn-primary w-100" type="submit">Create Details</button>
            </form>
        </div>
    </div>
</div>
@endsection