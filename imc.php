<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>IMC simples</title>
</head>
<body>
    <h2>calculadora de IMC</h2>

    <form method="post">
        peso (kg): <input type="number" name="peso"
        step="0.1" required><br><br>
        altura (m): <input type="number" name="altura"
        step="0.1" required><br><br>
        <input type="submit" value="calcular IMC">
    </form>
</body>
   <?php
   if ($_SERVER["REQUST_METHOD"] == "POST") {
    
   }
