<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController
{
    public function index(){
    return view("notes.index");
    }


    public function create(Request $request){

        $data = $request->validate([
            'title' => 'required|min:3|max:255',
            'body' => 'required|min:3'
        ]);


        $note = Note::create([
            'title' => $data['title'],
            'body' => $data['body']
        ]);

        if(!$note){
            return back()->with('error', 'There was an error creating the note');
        }
    }

}
