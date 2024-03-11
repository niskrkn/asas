<!DOCTYPE html>
<html>
<head>
    <title>Конвертер температуры</title>
</head>
<body>

<h2>Конвертер температуры</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="temperature">Температура:</label>
    <input type="text" id="temperature" name="temperature" required><br>

    <label for="unit">Выберите единицу измерения:</label>
    <select id="unit" name="unit" required>
        <option value="celsius">Цельсий</option>
        <option value="fahrenheit">Фаренгейт</option>
    </select><br>

    <input type="submit" name="submit" value="Конвертировать">
</form>

<?php
// Функция для конвертации температуры из Цельсия в Фаренгейты
function celsius_to_fahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Функция для конвертации температуры из Фаренгейтов в Цельсии
function fahrenheit_to_celsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $temperature = $_POST['temperature'];
    $unit = $_POST['unit'];

    if ($unit == "celsius") {
        $converted_temperature = celsius_to_fahrenheit($temperature);
        echo "Температура в градусах Фаренгейта: $converted_temperature °F";
    } elseif ($unit == "fahrenheit") {
        $converted_temperature = fahrenheit_to_celsius($temperature);
        echo "Температура в градусах Цельсия: $converted_temperature °C";
    }
}
?>

</body>
</html>