<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\citas;
use Illuminate\Http\Request;

class CitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $citas = new citas;
      $citas = $citas->citasordenadasporfecha();
      if (session()->has('logueado')) {
          return view ('citas', compact('citas'));
      }else {
          return view('login');
      }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'nombre' => 'required | string',
        'email' => 'required | email',
        'telefono' => 'required | numeric',
        'prenda' => 'required',
        'fecha' => 'required',
        //'dia' => 'required | numeric',
        //'mes' => 'required | numeric',
        //'anio' => 'required | numeric',
      ]);

      $buscar= $request->nombre.$request->email.$request->fecha;
      $buscar= strtoupper($buscar);
      $prenda=json_encode($request->prenda);
      $cita = new citas;
      $cita->nombre = $request->nombre;
      $cita->email = $request->email;
      $cita->telefono = $request->telefono;
      $cita->prenda = $prenda;
      $cita->fecha = $request->fecha;
      $cita->buscar = $buscar;
      $cita->save();

      return redirect('contactanos')->with('status','Nos pondremos en contacto contigo para la confirmacion de la cita, Gracias!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editar='si';
        $cita=citas::find($id);
        return view ('contact', compact('cita','editar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'nombre' => 'required | string',
        'email' => 'required | email',
        'telefono' => 'required | numeric',
        'prenda' => 'required',
        'fecha' => 'required | date',
      ]);

      $prenda=json_encode($request->prenda);

      $cita=citas::find($id);

      $cita->update([
        'nombre' => $request->nombre,
        'email' => $request->email,
        'telefono' => $request->telefono,
        'prenda' => $prenda,
        'fecha' => $request->fecha,
      ]);

        return redirect()->route('cita.index')->with('status','Actualizacion correcta!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\citas  $citas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cita=citas::find($id);
      $cita->delete();
      return back()->withInput()->with('status','Se ha eliminado la cita');
    }

    public function buscar(Request $request)
    {
      $buscar=strtoupper($request->buscar);
      $buscar=trim($buscar);
      $buscar=str_replace(' ','',$buscar);

      $citas= DB::table('citas')
      ->where('buscar','LIKE','%'.$buscar.'%')
      ->orWhere('fecha','LIKE','%'.$buscar.'%')->get();

      if (session()->has('logueado')) {
          return view ('citas', compact('citas'));
      }else {
          return view('login');
      }
    }

    public function fechas()
    {
        $citas= new citas;
        $fechas = $citas->Disponibilidad();
        $dia=$fechas[0];
        //dd($fechas);
        return view ('contact', compact('fechas'));
    }
}
