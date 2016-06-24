<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function notes(){
      return $this->hasMany(Note::class);
    }

    // public function path(){ //one option for messy routes
    //   return '/cards/' . $this->id;
    // }

    public function addNote(Note $note) {
      return $this->notes()->save($note); //another option to be explicit about what you are doing
    }
}
