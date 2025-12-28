<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de 2 numeros</title>
</head>
<body>
    <h2>Suma de 2 numeros</h2>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Numero 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Numero 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <input type="submit" value="Sumar">
    </form>
    <br>
    @if(isset($resultado))
        <h3>El resultado de la suma es: {{ $resultado }}</h3>
    @endif
</body>
</html>