<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saison extends Model
{
    //
    public function partie(){
        return $this->hasMany(Partie::class);
    }
    
}
