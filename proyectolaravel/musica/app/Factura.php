<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table='factura';

    protected $primaryKey="Id_factura";

    public $timestamps=false;

    protected $fillable =[
    	'No_contrato',
    	'Id_cliente',
    	'id_banda',
    	'Importe',
    	'Fecha',
    	'Horas'

    ];

    protected $guarded =[

    ];
}
