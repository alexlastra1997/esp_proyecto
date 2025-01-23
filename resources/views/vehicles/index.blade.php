<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vehículo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold mb-6">Buscar Vehículo</h1>

        <!-- Formulario de búsqueda -->
        <div class="mb-6">
            <label for="placa" class="block font-bold">Buscar por Placa</label>
            <input type="text" id="placa" class="input input-bordered w-full" placeholder="Ingrese la placa del vehículo">
            <button id="search-btn" class="btn btn-primary mt-2">Buscar</button>
        </div>

        <!-- Resultado de búsqueda -->
        <div id="search-result" class="hidden bg-white p-4 rounded shadow">
            <h2 class="text-lg font-bold mb-4">Resultado</h2>
            <p id="vehicle-info"></p>
            <a id="redirect-btn" class="btn btn-success mt-4 hidden">Ingresar</a>
        </div>
    </div>

    <script>
        document.getElementById('search-btn').addEventListener('click', async function () {
            const placa = document.getElementById('placa').value;
            const resultDiv = document.getElementById('search-result');
            const infoParagraph = document.getElementById('vehicle-info');
            const redirectBtn = document.getElementById('redirect-btn');

            resultDiv.classList.add('hidden');
            redirectBtn.classList.add('hidden');

            if (placa.trim() !== '') {
                try {
                    const response = await axios.get('{{ route('vehicles.find') }}', { params: { placa } });
                    const vehicle = response.data;

                    infoParagraph.textContent = `Placa: ${vehicle.placa}, Nombre: ${vehicle.nombre}, Apellido: ${vehicle.apellido}`;
                    redirectBtn.href = `{{ route('vehicles.create') }}?placa=${vehicle.placa}&nombre=${vehicle.nombre}&apellido=${vehicle.apellido}&marca=${vehicle.marca}&color=${vehicle.color}`;
                    redirectBtn.classList.remove('hidden');
                    resultDiv.classList.remove('hidden');
                } catch (error) {
                    alert('Vehículo no encontrado.');
                }
            } else {
                alert('Por favor, ingrese una placa.');
            }
        });
    </script>
</body>
</html>
