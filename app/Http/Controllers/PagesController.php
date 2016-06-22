<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() {
      $people = ["Chelsea", "Bryan", "Penny", "Caia"];
      return view('welcome', compact('people')); // can also do ['people' => $people]);
    }

    public function about() {
      return view('pages/about'); 
    }
}
