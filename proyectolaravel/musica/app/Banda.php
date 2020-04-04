<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banda extends Model
{
    protected $table='banda';

    protected $primaryKey="Id_banda";

    public $timestamps=false;

    protected $fillable =[
    	'Nombre',
    	'Genero',
    	'Integrantes',
    	'Id_factura',
    	'Correo',
    	'Telefono'

    ];

    protected $guarded =[

    ];
}
