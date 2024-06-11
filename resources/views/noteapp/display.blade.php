        @extends('noteapp.index')
        @section('main')
        <div class="container">
            <div>
                {{-- {{dd(Auth::user())}} --}}
                @if(Auth::user())
                <div class="row">
                    @foreach ($allnotes as $note)
                    <div class="shadow mt-3 py-4 d-flex justify-content-center">
                        <div>

                            <div>User_id: <b> {{$note->user_id}}</b></div>
                            <div class="col-3">{{$note->notetitle}}</div>
                            <div class="col-3">{{$note->content}}</div>
                            <div class="col-3">{{$note->createdate}}</div>
                            <div class="col-3 d-flex justify-between gap-2">
                                <form action="/displaynote/delete/{{ $note-> note_id }}" method="POST" >
                                    @csrf
                                    <button class="btn btn-danger ">
                                        Delete
                                    </button>
                                    
                                    
                                </form>
                            {{-- <a href="/displaynote/delete/{{ $note-> note_id }}" class="text-decoration-none btn btn-danger"  onclick="return confirm('Are you sure you want to delete this note')>
                                <button  class="btn btn-danger">
                                    Delete
                                </button>                           
                             </a> --}}
                            <a href="/displaynote/edit/{{$note-> note_id}}">
                                <button class="btn btn-success">
                                    Edit
                                </button>
                            </a>
                            <a href="/viewnote/{{$note-> note_id}}">
                                <button class="btn btn-primary">
                                    View
                                </button>
                            </a>
                        </div>
                        </div>
                        <div class="float-end">
                            <img class="col-5 float-end rounded-5" src="/images/{{$note->user_img}}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div>you are not currently signed in</div>
                <a href="/login">Login in here!</a>
                @endif
            </div>
            
        </div>
        @endsection