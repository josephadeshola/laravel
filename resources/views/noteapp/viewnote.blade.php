@extends('noteapp.index')
@section('main')
    <div class="container">
        <div class="col-md-5 mx-auto shadow p-2">
            <div class="col-10 mx-auto shadow">
                <p class="text-center text-primary">Title: {{$notes->notetitle}}</p>
                <p class="text-center text-primary">Content: {{$notes->content}}</p>
                <p class="text-center text-primary">Created date: {{$notes->createdate}}</p>
            </div>

        </div>
    </div>
@endsection