<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteFormRequest;
use DB;


class ClienteController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $Request)
    {
    	if($Request){
    		$query=trim($Request->get('searchText'));
    		$clientes=DB::table('cliente')->where('Nombre','LIKE','%'.$query.'%')
    		//->where('cliente','=','1')
    		->orderBy('Id_cliente','desc')
    		->paginate(10);
    		return view('registro.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	return view("registro.cliente.create");
    }
    public function store(ClienteFormRequest $Request)
    {
    	$cliente=new cliente;
    	$cliente->Nombre=$Request->get('Nombre');
    	$cliente->Apellido=$Request->get('Apellido');
    	$cliente->Correo=$Request->get('Correo');
    	$cliente->Edad=$Request->get('Edad');
        $cliente->Telefono=$Request->get('Telefono');
    	$cliente->No_factura=$Request->get('No_factura');
    	$cliente->save();
    	return Redirect::to('registro/cliente');
    }
    public function show($Id)
    {
    	return view("registro.cliente.show",["cliente"=>cliente::findOrFail($Id)]);

    }
    public function edit($Id)
    {
    	return view("registro.cliente.edit",["cliente"=>cliente::findOrFail($Id)]);

    }
    public function update(ClienteFormRequest $Request,$Id)
    {
    	$cliente=Cliente::findOrFail($Id);
    	$cliente->Nombre=$Request->get('Nombre');
    	$cliente->Apellido=$Request->get('Apellido');
    	$cliente->Correo=$Request->get('Correo');
    	$cliente->Telefono=$Request->get('Telefono');
    	$cliente->Edad=$Request->get('Edad');
        $cliente->Telefono=$Request->get('Telefono');
    	$cliente->No_factura=$Request->get('No_factura');
    	$cliente->update();
    	return Redirect::to('registro/cliente');
    }
    public function destroy($Id)
    {
        Cliente::destroy($Id);

        return Redirect::to('registro/cliente');

    }
}
