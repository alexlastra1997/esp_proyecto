<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Lista de Vehículos</h1>

         <!-- Formulario de Filtros -->
         <form method="GET" action="{{ route('vehicles.index') }}" class="mb-6 grid grid-cols-4 gap-4">
            <!-- Campo de búsqueda por placa -->
            <div>
                <label for="placa" class="block text-sm font-medium text-gray-700">Buscar por Placa:</label>
                <input type="text" id="placa" name="placa" value="{{ request('placa') }}" placeholder="Ingrese la placa"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo de rango de fecha inicio -->
            <div>
                <label for="start_date" class="block text-sm font-medium text-gray-700">Fecha Inicio:</label>
                <input type="date" id="start_date" name="start_date" value="{{ request('start_date') }}"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Campo de rango de fecha fin -->
            <div>
                <label for="end_date" class="block text-sm font-medium text-gray-700">Fecha Fin:</label>
                <input type="date" id="end_date" name="end_date" value="{{ request('end_date') }}"
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <!-- Botones de Buscar y Limpiar -->
            <div class="flex items-end space-x-2">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md shadow-sm hover:bg-blue-700">
                    Buscar
                </button>
                <a href="{{ route('vehicles.index') }}" 
                   class="px-4 py-2 bg-gray-400 text-white rounded-md shadow-sm hover:bg-gray-500">
                    Limpiar
                </a>
            </div>
        </form>

        <!-- Tabla de Vehículos -->
        <table class="table-auto w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Nombre</th>
                    <th class="border border-gray-300 px-4 py-2">Apellido</th>
                    <th class="border border-gray-300 px-4 py-2">Marca</th>
                    <th class="border border-gray-300 px-4 py-2">Placa</th>
                    <th class="border border-gray-300 px-4 py-2">Color</th>
                    <th class="border border-gray-300 px-4 py-2">Fecha</th>
                    <th class="border border-gray-300 px-4 py-2">Hora</th>
                    <th class="border border-gray-300 px-4 py-2">Entrada o Salida</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($vehicles as $vehicle)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->nombre }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->apellido }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->marca }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->placa }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->color }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->fecha }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->hora }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $vehicle->tipo }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <a href="{{ route('vehicles.create', [
                                'nombre' => $vehicle->nombre,
                                'apellido' => $vehicle->apellido,
                                'marca' => $vehicle->marca,
                                'placa' => $vehicle->placa,
                                'color' => $vehicle->color,
                                'fecha' => $vehicle->fecha,
                                'hora' => $vehicle->hora,
                            ]) }}" 
                            class="px-4 py-2 bg-green-600 text-white rounded-md shadow-sm hover:bg-green-700">
                                Ingresar
                            </a>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="border border-gray-300 px-4 py-2 text-center">No se encontraron vehículos.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
