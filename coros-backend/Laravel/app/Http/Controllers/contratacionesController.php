<?php

namespace App\Http\Controllers;

use App\Models\contrataciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Paquetes;
use App\Models\usuario;
use App\Mail\correo;
use App\Filters\V1\UserFilter;
use App\Http\Resources\V1\UserCollection;
use App\Http\Resources\V1\UserResource;

class contratacionesController extends Controller
{
    public function index(){
        //$contrataciones = \DB::table('contrataciones')->select('id','id_paquete','id_cliente','Tipo_evento','Forma_de_pago','Fecha','Hora','Lugar','fecha_apartado')->get();
        $contrataciones = Paquetes::all();
        $usuario = usuario::all();
        return view('agregar', compact('contrataciones','usuario'));
    }

    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        $contrato = new contrataciones();
        $contrato->id_paquete = $request->post('id_paquete');
        $contrato->id_cliente = $request->post('id_cliente');
        $contrato->Tipo_evento = $request->post('Tipo_evento');
        $contrato->Forma_de_pago = $request->post('Forma_de_pago');
        $contrato->Fecha = $request->post('Fecha');
        $contrato->Hora = $request->post('Hora');
        $contrato->Lugar = $request->post('Lugar');
        $contrato->save();
        
        $mensaje=[
            'title' => 'Nuevo Contrato Recibido',
            'body' => 'prueba tasdasd'
        ];

        Mail::to("flendogga09@gmail.com")->send(new correo($mensaje));
        return redirect()->back();

    }

    public function user(Request $request)
    {
        $filter = new UserFilter();
        $filterItems = $filter->transform($request);
 
        $includeUser = $request->query('includePaquetes');
        $includeFechas = $request->query('includeFechas');
 
        $empresas = usuario::where($filterItems);
 
        if($includeUser){
         $usuarios = $usuarios->with('users');
        }
 
        return new UserCollection($usuarios->paginate()->appends($request->query()));
    }

}