<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use App\Http\Requests\StoreBeneficioRequest;
use App\Http\Requests\UpdateBeneficioRequest;
use App\Models\BeneficiosEntregados;

class BeneficioController extends Controller
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
    public function store(StoreBeneficioRequest $request)
    {
        //
        // Valida los datos recibidos del request
        $beneficio_validado = $request->validate([
            'nombre' => 'required|string',
            'ficha_id' => 'required|exists:fichas,id',
            'fecha' => 'required|date',
        ]);

        // Crea una nueva ficha con los datos proporcionados
        $beneficio = Beneficio::create($beneficio_validado);

        // Retorna la beneficio creada en formato JSON
        return response()->json($beneficio, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Beneficio $beneficio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beneficio $beneficio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeneficioRequest $request, Beneficio $beneficio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beneficio $beneficio)
    {
        //
    }

    public function consultarBeneficiosPorRut($rut)
    {
        // Lógica para obtener los beneficios por el RUT proporcionado
        $run = substr($rut, 0, -1);
        $dv = substr($rut, -1);

        // Por ejemplo, podrías obtener los beneficios entregados por el RUT
        $beneficiosPorRut = BeneficiosEntregados::where('run', $run)->with('beneficio.ficha')->get();

        $response = [
            'code' => 200,
            'success' => true,
            'data' => [],
        ];

        // Agrupar beneficios por año
        $beneficiosPorAnio = $beneficiosPorRut->groupBy(function ($beneficio) {
            return \Carbon\Carbon::parse($beneficio->fecha)->format('Y');
        });

        // Transformar los beneficios agrupados por año al formato deseado
        $response['data']['beneficios'] = $beneficiosPorAnio->map(function ($beneficios, $anio) {
            return [
                'year' => $anio,
                'num' => $beneficios->count(),
                'montoTotal' => '$' . $beneficios->sum('total'),
                'beneficios' => $beneficios->map(function ($beneficioEntregado) {
                    return [
                        'id' => $beneficioEntregado->id,
                        'nombre' => $beneficioEntregado->beneficio->nombre,
                        'total' => '$' . $beneficioEntregado->total,
                        'fecha' => \Carbon\Carbon::parse($beneficioEntregado->fecha)->format('d/m/Y'),
                        'mes' => \Carbon\Carbon::parse($beneficioEntregado->fecha)->format('F'),
                        'ficha' => [
                            'id' => $beneficioEntregado->beneficio->ficha->id,
                            'nombre' => $beneficioEntregado->beneficio->ficha->nombre,
                            'url' => $beneficioEntregado->beneficio->ficha->url,
                            'publicada' => $beneficioEntregado->beneficio->ficha->publicada,
                        ],
                    ];
                }),
            ];
        });

        return response()->json($response);
    }
}
