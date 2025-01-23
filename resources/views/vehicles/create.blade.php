<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Registrar Nuevo Vehículo</h1>
        <form action="{{ route('vehicles.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf
    <div>
        <label for="nombre" class="block font-bold">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="input input-bordered w-full" 
               value="{{ request('nombre') }}" required>
    </div>
    <div>
        <label for="apellido" class="block font-bold">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="input input-bordered w-full" 
               value="{{ request('apellido') }}" required>
    </div>
    <div>
        <label for="marca" class="block font-bold">Marca del Vehículo</label>
        <input type="text" name="marca" id="marca" class="input input-bordered w-full" 
               value="{{ request('marca') }}" required>
    </div>
    <div>
        <label for="placa" class="block font-bold">Placa del Vehículo</label>
        <input type="text" name="placa" id="placa" class="input input-bordered w-full" 
               value="{{ request('placa') }}" required>
    </div>
    <div>
        <label for="color" class="block font-bold">Color</label>
        <input type="text" name="color" id="color" class="input input-bordered w-full" 
               value="{{ request('color') }}" required>
    </div>
    <div>
        <label for="fecha" class="block font-bold">Fecha</label>
        <input type="date" name="fecha" id="fecha" class="input input-bordered w-full" required>
    </div>
    <div>
        <label for="hora" class="block font-bold">Hora</label>
        <input type="time" name="hora" id="hora" class="input input-bordered w-full" required>
    </div>
    <div>
        <label for="tipo" class="block font-bold">Tipo</label>
        <select name="tipo" id="tipo" class="input input-bordered w-full" required>
            <option value="entrada">Entrada</option>
            <option value="salida">Salida</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

    </div>
</body>
</html>
