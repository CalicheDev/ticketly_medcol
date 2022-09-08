<?php

namespace App\Http\Controllers;

use App\Models\Admin\mov__radicados;
use Illuminate\Http\Request;

class MovRadicadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $usuario_id = $request->session()->get('usuario_id');
        if ($request->ajax()) {
            $datas = mov__radicados::orderBy('id_radicado')
                ->get();


            return  DataTables()->of($datas)
                ->addColumn('action', function ($datas) {
                    $button = '<button type="button" name="edit" id="' . $datas->id_radicado . '"
        class = "edit btn-float  bg-gradient-primary btn-sm tooltipsC"  title="Editar paciente"><i class="far fa-edit"></i></button>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.2-radicados.radicacion.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\mov__radicados  $mov__radicados
     * @return \Illuminate\Http\Response
     */
    public function show(mov__radicados $mov__radicados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\mov__radicados  $mov__radicados
     * @return \Illuminate\Http\Response
     */
    public function edit(mov__radicados $mov__radicados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\mov__radicados  $mov__radicados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mov__radicados $mov__radicados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\mov__radicados  $mov__radicados
     * @return \Illuminate\Http\Response
     */
    public function destroy(mov__radicados $mov__radicados)
    {
        //
    }
}
