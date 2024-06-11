<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoteappController extends Controller
{
    public function showNote()
    {
        return view('noteapp.createnote');
    }

    public function addNote(Request $req)
    {
        // dd($req);
        // return $req->image->getClientOriginalName();
        $newname = time().$req->image->getClientOriginalName();
        $move = $req->image->move(public_path('images/'), $newname);
        if($move){
            // return $newname;
            $insert = DB::table('note_db')->insert([
                'notetitle' => $req->title,
                'content' => $req->content,
                'user_id' => Auth::user()->id,
                'user_img' => $newname
            ]);
            if ($insert) {
                // route = redirect
                // file = bladename
                // return ($insert);
                return redirect('/displaynote');
    
            } else {
                return ("Not sent");
            }
        }   
        else{
            return "not moved";
        }
    }

    public function displaynote()
    {
        $select = Db::table("note_db")->where('user_id', Auth::user()->id)->get();
        return view('noteapp.display', [
            'allnotes' => $select
        ]);
        // first return one user
        // get return more than one user
        // return $select;
        // return view('noteapp.display');

    }

    public function show($id)
    {
        // get return an array
        // first return an object
        $show = DB::table('note_db')->where('note_id', $id)->first();
        return view('noteapp.viewnote', [
            'notes' => $show
        ]);
    }

    public function edit($noteid)
    {
        $edit = DB::table('note_db')->where('note_id', $noteid)->first();
        return view('noteapp.edit', [
            'notes' => $edit
        ]);

    }

    public function update(Request $req, $id)
    {
        $update = DB::table('note_db')->where('note_id', $id)->update([
            'notetitle' => $req->notetitle,
            'content' => $req->content

        ]);

        return redirect("/displaynote");
    }

    public function delete($id)
    {
        $del = DB::table('note_db')->where('note_id', $id)->delete();
        if ($del) {
            return redirect("/displaynote");
        } else {
            return view('note_delete_failed');
        }
    }
}
