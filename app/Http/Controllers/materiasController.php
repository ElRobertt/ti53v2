<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
    /**
     * Display a listing of the resource. Mostrar listado de materias
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var_materias=[
            ['titulo'=> 'Aplicacion Web'],
            ['titulo'=> 'Base de Datos'],
            ['titulo'=> 'Aplicacion Web para I 4.0'],
            ['titulo'=> 'Integradora'],
        ];

        return view('materias', compact('var_materias'));
    }

    /**
     * Show the form for creating a new resource. Dar de alta nueva materia
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
     * Display the specified resource. Para buscar o consultar materia por id
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. Editar una materia previamente registrada
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage. Guardar cambios en la materia del metodo edit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. Eliminar una materia
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
