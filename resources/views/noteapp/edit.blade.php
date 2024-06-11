@extends('noteapp.index')

@section('main')
<div class="">
   <div class="col-8 mx-auto shadow">
        <div class="shadow p-4 m-4">
            <h4 class="text-center  text-primary ">Note App</h4>
            <form action="/displaynote/edit/{{$notes->note_id}}" method="post">
                @csrf
                <input type="text" name="notetitle" class="form-control" placeholder="Note Title" value="{{$notes->notetitle}}">
                <textarea name="content" id="" cols="30" class="mt-3 form-control" placeholder="Note Description......" rows="10">{{$notes->content}}</textarea>
                <button type="submit" class="btn mt-3 btn-success w-100">Update note</button>
            </form>
            
        </div>
   </div>
</div>
@endsection