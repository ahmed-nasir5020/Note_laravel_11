<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource. all
     */
    public function index()
    {
        //
        // $notes = Note::query()->orderBy("created_at","desc")->get(); //elquent collection 
        $notes = Note::query()->orderBy("created_at","desc")->paginate(5);
        return view('note.index',['notes'=> $notes]);
    }

    /**
     * Show the form for creating a new resource. form
     */
    public function create()
    {
        //
        return view('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate data from user 
        $data = $request->validate([
            'note'=>['required','string']
        ]);
        $data['user_id'] = 1;
        //store data in db 
        $note =  Note::create($data);
        // return and have session message 
        return redirect()->route('note.show',$note->id)->with('message','note is created');
    }

    /**
     * Display the specified resource. single 
     */
    public function show(Note $note)
    {
        //
        return view('note.show',['note'=> $note]);
    }

    /**
     * Show the form for editing the specified resource. form 
     */
    public function edit(Note $note)
    {
        //
        return view('note.edit',['note'=> $note]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
        //validate data from user 
        $data = $request->validate([
            'note'=>['required','string']
        ]);
        
        //update data in db 
        $note->update($data);
        
        // return and have session message 
        return redirect()->route('note.show',$note->id)->with('message','note is updated');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
        $note->delete();
        
        return redirect()->route('note.index')->with('message','note is deleted');
    }
}
