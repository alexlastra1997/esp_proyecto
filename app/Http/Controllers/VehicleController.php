<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{   

    public function create(Request $request)
    {
        // Datos prellenados opcionales
        $vehicleData = $request->only(['nombre', 'apellido', 'marca', 'placa', 'color']);
        return view('vehicles.create', compact('vehicleData'));
    }


    public function store(Request $request)
    {
    // Validar los datos
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'apellido' => 'required|string|max:255',
        'marca' => 'required|string|max:255',
        'placa' => 'required|string|max:10|unique:vehicles',
        'color' => 'required|string|max:50',
        'fecha' => 'required|date',
        'hora' => 'required|date_format:H:i',
        'tipo' => 'required|in:entrada,salida', // Validar el nuevo campo
    ]);

    // Guardar el vehículo
    Vehicle::create($validatedData);

    return redirect()->route('vehicles.index')
        ->with('success', 'Vehículo registrado exitosamente.');
}
    public function index(Request $request)
    {
        $vehicles = Vehicle::all(); // Obtén todos los registros de vehículos
        // Construir consulta inicial
        $query = Vehicle::query();

        // Filtrar por placa si está presente
        if ($request->filled('placa')) {
            $query->where('placa', 'like', '%' . $request->placa . '%');
        }

        // Filtrar por rango de fechas si ambos parámetros están presentes
        if ($request->filled('start_date') && $request->filled('end_date')) {
            $query->whereBetween('fecha', [$request->start_date, $request->end_date]);
        }

        // Obtener los resultados
        $vehicles = $query->get();

        
        return view('vehicles.statistics', compact('vehicles'));
    }

    
    
}
