<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table='lugar';

    protected $primaryKey="Id_lugar";

    public $timestamps=false;

    protected $fillable =[
    	'Pais',
    	'Estado',
    	'Codigo_postal',
    	'Calle',
    	'Colonia',
    	'Id_banda'

    ];

    protected $guarded =[

    ];
}
