<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{
    public function store(Request $request)
    {
        // Validar los datos enviados
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:staff,email',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
        ]);

        // Guardar en la base de datos
        $staff = Staff::create($validated);

        // Devolver respuesta
        return response()->json([
            'message' => 'Personal registrado con éxito',
            'data' => $staff
        ], 201);
    }
}
