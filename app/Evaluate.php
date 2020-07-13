<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluate extends Model
{
    public function user(){
        return $this->hasOne('App\User', 'id');
    }
    public function csience(){
        return $this->hasOne('App\Science', 'id');
    }
}
