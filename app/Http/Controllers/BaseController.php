<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function viewForm()
    {
        return view('welcome');
    }

    /**
     * Store a new user.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function save(Request $request)
    {
        $data = $request->all();
        $resultados = Resultados::create([
            'car' => $data['car'],
            'circuit' => $data['circuit'],
            'series' => $data['series'],
            'DNF' => json_decode($data['DNF']),
            'incidents' => $data['incidents'],
            'x4tome' => json_decode($data['4xtome']),
            'x4toothers' => json_decode($data['x4toothers']),
            'laps' => $data['laps'],
            'start_position' => $data['start_position'],
            'finish_position' => $data['finish_position'],
            'irating' => $data['irating'],
            'safety_rating' => $data['safety_rating'],
            'SOF' => $data['SOF'],
            'seconds_to_pole' => $data['seconds_to_pole'],
            'seconds_end_race' => $data['seconds_to_leader'],
            'training' => $data['training'],
            'did_qualy' => $data['didqualy'],
        ]);
        $resultados->save();

        return redirect('/')->with('message', 'registro creado correctamente');
    }

    public function getAllResults()
    {
        return response()->json(Resultados::all());
    }
}
