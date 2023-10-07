<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    function convertirNumeroRomano($numero) {
        $valores = array(
            1000 => "M",
            900 => "CM",
            500 => "D",
            400 => "CD",
            100 => "C",
            90 => "XC",
            50 => "L",
            40 => "XL",
            10 => "X",
            9 => "IX",
            5 => "V",
            4 => "IV",
            1 => "I"
        );

        $numeroRomano = "";
        foreach ($valores as $valor => $letra) {
            while ($numero >= $valor) {
                $numeroRomano .= $letra;
                $numero -= $valor;
            }
        }
        return $numeroRomano;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero >= 1 && $numero <= 3999) {
            $numeroRomano = convertirNumeroRomano($numero);
            echo "<p>El número $numero en números romanos es: $numeroRomano</p>";
        } else {
            echo "<p>Por favor, ingrese un número entre 1 y 3999.</p>";
        }
    }
    ?>
    <a href="index.html">Volver</a>
</body>
</html>
