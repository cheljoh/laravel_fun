<?php

Route::get('cards', 'CardsController@index');

Route::get('cards/{card}', 'CardsController@show');

Route::post('cards/{card}/notes', 'NotesController@store');

Route::get('/notes/{note}/edit', 'NotesController@edit');

Route::patch('/notes/{note}', 'NotesController@update');

Route::auth();

Route::get('/dashboard', 'HomeController@index');

Route::get('/', function() {
  return view("welcome");
});

Route::get('begin', function(){
  // Session::flash('status', 'Check out this sweet flash message'); //another option

  flash('You are signed in!', "success"); //have helpers function, have to incl in composer.json "files" autoload
  return redirect('/');
});
