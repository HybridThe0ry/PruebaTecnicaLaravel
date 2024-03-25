<?php

namespace App\Http\Controllers;

use App\Models\MontosMaximos;
use App\Http\Requests\StoreMontosMaximosRequest;
use App\Http\Requests\UpdateMontosMaximosRequest;

class MontosMaximosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMontosMaximosRequest $request)
    {
        //
        // Valida los datos recibidos del request
        $monto_maximo_validado = $request->validate([
            'id_beneficio' => 'required|integer|exists:beneficios,id',
            'monto_minimo' => 'required|numeric|min:0',
            'monto_maximo' => 'required|numeric|min:' . $request->input('monto_minimo'),
        ]);

        $monto_maximo = MontosMaximos::create($monto_maximo_validado);
        return response()->json($monto_maximo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(MontosMaximos $montosMaximos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MontosMaximos $montosMaximos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMontosMaximosRequest $request, MontosMaximos $montosMaximos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MontosMaximos $montosMaximos)
    {
        //
    }
}
