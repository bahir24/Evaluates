<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function evaluates(){
        return $this->hasMany('App\Evaluate', 'student');
    }
    public function groups(){
        return $this->hasOne('App\Group', 'id');
        dd($this->groups());
    }

    // $this->$group = App\Group::find(1)->groups()

    // $appends = [
    //     'evaluate',

    // ];

}
