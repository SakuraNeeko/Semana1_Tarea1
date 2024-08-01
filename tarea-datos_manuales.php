<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 1 - Tarea 1</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f8fc;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        h1 {
            color: #6a5acd;
        }
        .btn-primary {
            background-color: #87cefa;
            border-color: #87cefa;
        }
        .btn-secondary {
            background-color: #ffb6c1;
            border-color: #ffb6c1;
        }
        .table thead {
            background-color: #ffe4e1;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f0f8ff;
        }
        .table tbody tr:nth-child(even) {
            background-color: #e6e6fa;
        }
        .form-group label {
            color: #4682b4;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tarea 1 - Datos Manuales</h1>
        <form method="post">
            <div class="form-group">
                <label for="integer">Ingrese un Número Entero:</label>
                <input type="number" class="form-control" id="integer" name="integer" required>
            </div>
            <div class="form-group">
                <label for="float">Ingrese un Número Decimal (Flotante):</label>
                <input type="number" step="0.01" class="form-control" id="float" name="float" required>
            </div>
            <div class="form-group">
                <label for="string">Ingrese su Nombre (Cadena):</label>
                <input type="text" class="form-control" id="string" name="string" required>
            </div>
            <div class="form-group">
                <label for="boolean_int">Ingrese un Número Entero ("verdadero" si el número es par, "falso" si es impar):</label>
                <input type="number" class="form-control" id="boolean_int" name="boolean_int" required>
            </div>
            <div class="form-group">
                <label for="array">Ingrese al menos 3 productos (separado por comas):</label>
                <input type="text" class="form-control" id="array" name="array" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="button" class="btn btn-secondary" onclick="clearResults()">Limpiar</button>
        </form>

        <div id="results" class="mt-4">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $integer = intval($_POST['integer']);
                $float = floatval($_POST['float']);
                $string = $_POST['string'];
                $boolean_int = intval($_POST['boolean_int']);
                $boolean = $boolean_int % 2 == 0; // Verdadero si el número es par, falso si es impar
                $array = explode(",", $_POST['array']);

                $suma = $integer + $float;
                $producto = $integer * $float;

                $cadena1 = "Hola";
                $cadena2 = $string;
                $concatenacion = $cadena1 . " " . $cadena2;
                
                // Longitud sin espacios en blanco
                $cadena_sin_espacios = str_replace(' ', '', $concatenacion);
                $longitud = strlen($cadena_sin_espacios);
            ?>
            <h2>Resultados</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Resultado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Suma de Entero y Decimal</td>
                        <td><?php echo $suma; ?></td>
                    </tr>
                    <tr>
                        <td>Producto de Entero y Decimal</td>
                        <td><?php echo $producto; ?></td>
                    </tr>
                    <tr>
                        <td>Concatenación de Cadenas</td>
                        <td><?php echo $concatenacion; ?></td>
                    </tr>
                    <tr>
                        <td>Longitud de la Cadena (sin espacios)</td>
                        <td><?php echo $longitud; ?></td>
                    </tr>
                    <tr>
                        <td>Condicional Booleano</td>
                        <td><?php echo $boolean ? "La variable es verdadera" : "La variable es falsa"; ?></td>
                    </tr>
                    <tr>
                        <td>Elemento en el Índice 2 del Arreglo</td>
                        <td><?php echo isset($array[2]) ? $array[2] : "No definido"; ?></td>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function clearResults() {
            document.getElementById('results').innerHTML = '';
        }
    </script>
</body>
</html>
