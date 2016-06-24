<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Note;

use App\Card;

class NotesController extends Controller
{
    public function store(Request $request, Card $card){ //type hint here. Request is the params. Can also access Card because of the request

      // $note = new Note; //long way to do this
      //
      // $note->body = $request->body;
      //
      // $card->notes()->save($note);

      //---------------------------------------------------------

      // $note = new Note(['body' => $request->body]); //make sure you have fillable fields on
      //
      // $card->notes()->save($note);

      //---------------------------------------------------------------

      // $card->notes()->create(['body'=> $request->body]);

      //----------------------------------------------------------------

      // $card->notes()->create($request->all()); //returns array of parameters passed by request, ok to do because we protect against mass assignment, only allow body

      //-------------------------------------------------------------------

      $this->validate($request, [ //make body required
        'body' => 'required|min:10' 
      ]);

      $note = new Note($request->all());

      $card->addNote($note, 1); //have to make a model method on Card, send in user Id



      return back();
      // return redirect('/some/url') //another way
    }

    public function edit(Note $note){
      return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note){
      $note->update($request->all()); //$request->all() has whatever user typed in

      return back();

    }
}
