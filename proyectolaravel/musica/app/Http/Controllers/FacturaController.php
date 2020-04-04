<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\FacturaFormRequest;
use DB;

class FacturaController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $Request)
    {
    	if($Request){
    		$query=trim($Request->get('searchText'));
    		$facturas=DB::table('factura')
    		->join('cliente','cliente.Id_cliente','=','factura.Id_factura')
    		->join('banda','banda.Id_banda','=','factura.Id_factura')
    		
    		->select('factura.Id_factura','factura.No_contrato','cliente.Nombre as Nombrec','banda.Nombre as Nombre','factura.Importe','factura.Fecha','factura.Horas')
    		//																  'b.Id_banda as banda',
    		->where('No_contrato','LIKE','%'.$query.'%')
    		->orwhere('banda.Nombre','LIKE','%'.$query.'%')
    		//->where('cliente','=','1')
    		->orderBy('Id_factura','desc')  
    		->paginate(10);
    		return view('compra.factura.index',["facturas"=>$facturas,"searchText"=>$query]);
    	}
    }
    public function create()
    {
    	$clientes=DB::table('cliente')->get();
        $bandas=DB::table('banda')->get();
    	//->where('Id_cliente','>','1'),["bandas"=>$bandas]
    	return view("compra.factura.create",["clientes"=>$clientes],["bandas"=>$bandas]);
    }
    public function store(FacturaFormRequest $Request)
    {
    	$factura=new factura;
    	$factura->No_contrato=$Request->get('No_contrato');
    	$factura->Id_cliente=$Request->get('Id_cliente');
    	$factura->Id_banda=$Request->get('Id_banda');
    	$factura->Importe=$Request->get('Importe');
        $factura->Fecha=$Request->get('Fecha');
    	$factura->Horas=$Request->get('Horas');
    	$factura->save();
    	return Redirect::to('compra/factura'); 
    }
    public function show($Id)
    {
    	return view("compra.factura.show",["factura"=>factura::findOrFail($Id)]);

    }
    public function edit($Id)
    {
    	$factura=Factura::findOrFail($Id);
    	$facturas=DB::table('cliente')->where('Id_cliente','>','1')->get();
    	return view("compra.factura.edit",["factura"=>$factura],["clientes"=>$facturas]);

    }
    public function update(FacturaFormRequest $Request,$Id)
    {
    	$factura=factura::findOrFail($Id);
    	$factura->No_contrato=$Request->get('No_contrato');
    	$factura->Id_cliente=$Request->get('Id_cliente');
    	$factura->id_banda=$Request->get('id_banda');
    	$factura->Importe=$Request->get('Importe');
        $factura->Fecha=$Request->get('Fecha');
    	$factura->Horas=$Request->get('Horas');
    	$factura->update();
    	return Redirect::to('compra/factura');
    }
    public function destroy($Id)
    {
        Factura::destroy($Id);
        return Redirect::to('compra/factura');
    }
}
