<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factura;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\LugarFormRequest;
use DB;

class LugarController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $Request)
    {
        if($Request){
            $query=trim($Request->get('searchText'));
            $lugars=DB::table('lugar')
            ->join('banda','banda.Id_banda','=','lugar.Id_evento')
            //->join('banda','banda.Id_banda','=','factura.Id_factura')
            
            ->select('lugar.Id_evento','lugar.Pais','lugar.Estado','lugar.Codigo_postal','lugar.Calle','lugar.Colonia','banda.Nombre as Nombre')
            //                                                                'b.Id_banda as banda',
             ->where('Id_evento','>','0') 
            //->orwhere('factura.No_contrato','LIKE','%'.$query.'%')
            //->where('Id_evento','>','0')
            ->orderBy('Id_evento','desc')  
            ->paginate(10);
            return view('configuracion.lugar.index',["lugars"=>$lugars ,"searchText"=>$query]);
        }
    }
    public function create()
    {
        
        //$lugars=DB::table('lugar')->get();
        $bandas=DB::table('banda')->get();
        //->where('Id_cliente','>','1'),["bandas"=>$bandas]
        return view("configuracion.lugar.create",["bandas"=>$bandas]);
    }
    public function store(LugarFormRequest $Request)
    {
        $lugar=new Lugar;
        $lugar->Pais=$Request->get('Pais');
        $lugar->Estado=$Request->get('Estado');
        $lugar->Codigo_postal=$Request->get('Codigo_postal');
        $lugar->Calle=$Request->get('Calle');
        $lugar->Colonia=$Request->get('Colonia');
        $lugar->Id_banda=$Request->get('Id_banda');
        $lugar->save();
        return Redirect::to('configuracion/lugar'); 
    }
    public function show($Id)
    {
        return view("configuracion.lugar.show",["lugar"=>lugar::findOrFail($Id)]);

    }
    public function edit($Id)
    {
        $lugar=lugar::findOrFail($Id);
        $lugars=DB::table('banda')->where('Id_banda','>','1')->get();
        return view("configuracion.lugar.edit",["lugar"=>$lugar],["bandas"=>$lugars]);
         

    }
    public function update(LugarFormRequest $Request,$Id)
    {
        $lugar=lugar::findOrFail($Id);
        $lugar->Pais=$Request->get('Pais');
        $lugar->Estado=$Request->get('Estado');
        $lugar->Codigo_postal=$Request->get('Codigo_postal');
        $lugar->Calle=$Request->get('Calle');
        $lugar->Colonia=$Request->get('Colonia');
        $lugar->Nombre=$Request->get('Nombre');
        $banda->update();
        return Redirect::to('configuracion/lugar');
    }
    public function destroy($Id)
    {
        Banda::destroy($Id);
        return Redirect::to('configuracion/lugar');
    }
}
