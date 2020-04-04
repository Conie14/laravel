<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banda;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\BandaFormRequest;
use DB;

class BandaController extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $Request)
    {
        if($Request){
            $query=trim($Request->get('searchText'));
            $bandas=DB::table('banda')
            ->join('factura','factura.Id_factura','=','banda.Id_banda')
            //->join('banda','banda.Id_banda','=','factura.Id_factura')
            
            ->select('banda.Id_banda','banda.Nombre','banda.Genero','banda.Integrantes','factura.No_contrato as No_contrato','banda.Correo','banda.Telefono')
            //                                                                'b.Id_banda as banda',
           // ->where('Id_banda ','LIKE','%'.$query.'%')
            //->orwhere('factura.No_contrato','LIKE','%'.$query.'%')
            //->where('cliente','=','1')
            ->orderBy('Id_banda','desc')  
            ->paginate(10);
            return view('venta.banda.index',["bandas"=>$bandas,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $facturas=DB::table('factura')->get();
        $bandas=DB::table('banda')->get();
        //->where('Id_cliente','>','1'),["bandas"=>$bandas]
        return view("venta.banda.create",["facturas"=>$facturas],["bandas"=>$bandas]);
    }
    public function store(BandaFormRequest $Request)
    {
        $banda=new banda;
        $banda->Nombre=$Request->get('Nombre');
        $banda->Genero=$Request->get('Genero');
        $banda->Integrantes=$Request->get('Integrantes');
        $banda->Id_banda=$Request->get('Id_banda');
        $banda->Correo=$Request->get('Correo');
        $banda->Telefono=$Request->get('Telefono');
        $banda->save();
        return Redirect::to('venta/banda'); 
    }
    public function show($Id)
    {
        return view("venta.banda.show",["banda"=>banda::findOrFail($Id)]);

    }
    public function edit($Id)
    {
        $banda=Banda::findOrFail($Id);
        $bandas=DB::table('factura')->where('Id_factura','>','1')->get();
        return view("venta.banda.edit",["banda"=>$banda],["facturas"=>$bandas]);


    }
    public function update(BandaFormRequest $Request,$Id)
    {
        $banda=banda::findOrFail($Id);
        $banda->Nombre=$Request->get('Nombre');
        $banda->Genero=$Request->get('Genero');
        $banda->Integrantes=$Request->get('Integrantes');
        $banda->No_contrato=$Request->get('No_contrato');
        $banda->Correo=$Request->get('Correo');
        $banda->Telefono=$Request->get('Telefono');
        $banda->update();
        return Redirect::to('venta/banda');
    }
    public function destroy($Id)
    {
        Banda::destroy($Id);
        return Redirect::to('venta/banda');
    }
}
