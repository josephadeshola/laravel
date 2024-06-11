@extends('noteapp.index')

@section('main')
<div class="">
   <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h4 class="text-center  text-primary ">Note App</h4>
            <form action="/noteapp_process" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="title" class="form-control" placeholder="Note Title">
                <input type="file" name="image" class="form-control my-2" >
                <textarea name="content" id="" cols="30" class="mt-3 form-control" placeholder="Note Description......" rows="10"></textarea>
                
                <button type="submit" class="btn mt-3 btn-primary w-100">Create note</button>
            </form>
        </div>
   </div>
</div>
@endsection