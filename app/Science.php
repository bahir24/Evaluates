<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Science extends Model
{
    public function evaluates(){
        return $this->belongsTo('App\Evaluate', 'science');
    }
}
