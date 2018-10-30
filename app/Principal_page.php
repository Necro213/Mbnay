<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal_page extends Model
{
    protected $table = "principal_page";
    public $timestamps = false;
    protected $fillable = [
        'idUsuario','telefono','horario','FSC1title','FSC1content','FSC1image',
        'FSC2title','FSC2content','FSC2image','FSC3title','FSC3content','FSC3image',
        'FSC4title','FSC4content','FSC4image','FSC5title','FSC5content','FSC5image',
        'SSempresa','SSmensaje','TSservice1','TSservice2','TSservice3','TSservice4',
        'TSimage',
    ];

}
