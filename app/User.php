<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'noMembre', 'handicap',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];
    public function isAdmin(){
        foreach($this->role as $role){
            if($role->id == 1)
                return true;
        }
        return false;
    }
    public function isMembre(){
        foreach($this->role as $role){
            if($role->id == 2)
                return true;
        }
        return false;
    }

    public function role(){
        return $this->belongsToMany(Role::class);
    }
    public function partie(){
       return $this->hasMany(Partie::class);
    }
    
}
