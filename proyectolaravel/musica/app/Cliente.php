<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table='cliente';

    protected $primaryKey="Id_cliente";

    public $timestamps=false;

    protected $fillable =[
    	'Nombre',
    	'Apellido',
    	'Correo',
    	'Telefono',
    	'Edad',
    	'No_factura'

    ];

    protected $guarded =[

    ];
}
