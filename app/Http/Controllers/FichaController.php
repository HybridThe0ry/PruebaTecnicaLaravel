<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Http\Requests\StoreFichaRequest;
use App\Http\Requests\UpdateFichaRequest;
use Illuminate\Http\Request;

class FichaController extends Controller
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
    public function store(StoreFichaRequest $request)
    {
        //
        // Valida los datos recibidos del request
        $ficha_validada = $request->validate([
            'nombre' => 'required|string',
            'url' => 'required|url',
            'publicada' => 'required|boolean',
        ]);

        // Crea una nueva ficha con los datos proporcionados
        $ficha = Ficha::create($ficha_validada);

        // Retorna la ficha creada en formato JSON
        return response()->json($ficha, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFichaRequest $request, Ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ficha $ficha)
    {
        //
    }
}
