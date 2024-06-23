<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehiculoController extends Controller
{
    /**
     * Muestra el formulario para crear un nuevo vehículo.
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Almacena un nuevo vehículo en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'patente' => 'required|string|max:20',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'tipo_vehiculo' => 'required|string',
            'disponibilidad' => 'boolean',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
        ]);

        // Procesamiento de la imagen si se sube una
        $imagenPath = null;
        if ($request->hasFile('imagen')) {
            $imagenPath = $request->file('imagen')->store('vehiculos', 'public'); // Almacenar la imagen en storage/public/vehiculos
        }

        Vehiculo::create([
            'patente' => $request->patente,
            'modelo' => $request->modelo,
            'anio' => $request->anio,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'disponibilidad' => $request->has('disponibilidad'),
            'imagen' => $imagenPath, // Guardar la ruta de la imagen en la base de datos
        ]);

        return redirect()->route('vehiculos.index')->with('success', 'Vehículo agregado correctamente.');
    }

    /**
     * Muestra una lista de vehículos.
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function sedan()
    {
    // Lógica para obtener los arriendos de sedanes y las fotos
        $arriendosSedan = Arriendo::where('tipo_vehiculo', 'sedan')->get();
        
    return view('sedan', ['arriendos' => $arriendosSedan]);
    }

    public function suburban()
    {
    // Lógica para obtener los arriendos de sedanes y las fotos
        $arriendosSuburban = Arriendo::where('tipo_vehiculo', 'suburban')->get();

    return view('suburban', ['arriendos' => $arriendosSuburban]);
    }

    public function camionetas()
    {
    // Lógica para obtener los arriendos de sedanes y las fotos
        $arriendosCamionetas = Arriendo::where('tipo_vehiculo', 'camionetas')->get();

    return view('camionetas', ['arriendos' => $arriendosCamionetas]);
    }


}
