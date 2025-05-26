<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Consumo de Combustível</title>
</head>
<body>
    <h1>Calculadora de Consumo de Combustível</h1>

    <form id="fuelForm">
        <div>
            <label for="driverName">Nome do Condutor:</label>
            <input type="text" id="driverName" name="driverName" required><br><br>
        </div>
        <div>
            <label for="distance">Distância Percorrida (km):</label>
            <input type="number" id="distance" name="distance" min="0" step="0.01" required><br><br>
        </div>
        <div>
            <label for="fuel">Combustível Gasto (litros):</label>
            <input type="number" id="fuel" name="fuel" min="0" step="0.01" required><br><br>
        </div>
        <button type="button" onclick="calculateConsumption()">Calcular Consumo</button>
    </form>

    <div id="result" style="margin-top: 20px;"></div>

    <script>
        function calculateConsumption() {
            const driverNameInput = document.getElementById("driverName");
            const distanceInput = document.getElementById("distance");
            const fuelInput = document.getElementById("fuel");
            const resultDiv = document.getElementById("result");

            const driverName = driverNameInput.value;
            const distance = parseFloat(distanceInput.value);
            const fuel = parseFloat(fuelInput.value);

            if (!isNaN(distance) && !isNaN(fuel) && fuel > 0) {
                const averageConsumption = distance / fuel;
                const formattedConsumption = averageConsumption.toFixed(2);
                resultDiv.textContent = "Olá, ${driverName}! Seu consumo médio foi de ${formattedConsumption} km/L";
            } else {
                resultDiv.textContent = "Por favor, insira valores válidos para distância e combustível.";
            }
        }
    </script>
</body>
</html>