<?php

namespace App\Http\Controllers;

use App\Models\BeneficiosEntregados;
use App\Http\Requests\StoreBeneficiosEntregadosRequest;
use App\Http\Requests\UpdateBeneficiosEntregadosRequest;

class BeneficiosEntregadosController extends Controller
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
    public function store(StoreBeneficiosEntregadosRequest $request)
    {
        //
        $beneficio_entregado_validado = $request->validate([
            'id_beneficio' => 'required|integer|exists:beneficios,id',
            'run' => 'required|string|max:255',
            'dv' => 'required|string|max:1',
            'total' => 'required|numeric|min:0',
            'estado' => 'required|string|in:activo,inactivo',
            'fecha' => 'required|date',
        ]);

        $beneficio_entregado = BeneficiosEntregados::create($beneficio_entregado_validado);
        return response()->json($beneficio_entregado, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(BeneficiosEntregados $beneficiosEntregados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BeneficiosEntregados $beneficiosEntregados)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeneficiosEntregadosRequest $request, BeneficiosEntregados $beneficiosEntregados)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BeneficiosEntregados $beneficiosEntregados)
    {
        //
    }
}
