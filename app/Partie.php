<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partie extends Model
{
    //
    public function saison(){
      return $this->belongsTo(Saison::class);
    }
    public function terrain(){
      return $this->belongsTo(Terrain::class);
    }
    public function user(){
      return $this->belongsTo(User::class);
    }
}
