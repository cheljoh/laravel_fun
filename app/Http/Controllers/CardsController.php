<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB;

use App\Card;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index() {

      $cards = Card::all();
      // $cards = DB::table('cards')->get(); //not using ORM

      return view('cards.index', compact('cards'));

    }

    public function show(Card $card) { //telling Laravel to send an instance of Card, not just an ID. make sure wild card in route matches
    // public function show($id) {

      // $card = Card::find($id);

      $card->load('notes.user');

      return view('cards.show', compact('card'));

    }
}
