<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = "users";
    public $timestamps = false;
    protected $fillable = [
        'nombre', 'ape_paterno', 'ape_materno', 'email', 'password','apikey'
    ];

    protected $hidden = ['id'];


}
