@extends('nav')

@section('main')
    <form action="/register" class="col-md-4 mx-auto shadow-sm px-4 pb-4 mt-5" method="POST">
        @csrf
        <h6 class="text-center fw-bold">SIGN-UP FORM</h6>
        <div class="">
        <div class="col-12 mt-3">
            @if(isset($message))
            <p class="alert text-center col-12 alert-{{$status ? 'success' : "danger"}}">{{$message}}</p>
            @endif
        </div>
        <div class="form-group  mb-3">
            <label for="">Name</label>
            <input type="text" class="form-control bg-light  border-none border-primary" placeholder="name" name="name">
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input type="text" class="form-control bg-light  border-none border-primary" placeholder="email" name="email">
        </div>
        <div class="form-group mb-3">
            <label for="">Password</label>
            <input type="text" class="form-control bg-light  border-none border-primary" placeholder="password" name="password">
        </div>
        <div class="form-group mb-3">
            <label for="">username</label>
            <input type="text" class="form-control bg-light  border-none border-primary" placeholder="username" name="username">
        </div>
        <div class="form-group mb-3">
            <label for="">phone_number</label>
            <input type="text" class="form-control bg-light  border-none border-primary" placeholder="phone_number" name="phone_number">
        </div>
        <input type="checkbox"> <span class="fw-bold "> Accept all cookies</span>
        <div class="form-group mb-2">
     <button class="btn btn-primary w-50 mt-4">Sign up</button>
        </div>
    </div>
    </form>
@endsection