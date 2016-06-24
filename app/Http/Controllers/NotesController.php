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

      $card->addNote(
        new Note($request->all())
      ); //have to make a model method on Card



      return back();
      // return redirect('/some/url') //another way
    }

    // public function store(){ //laravel helper method
    //   return request()->all();
    // }
}
