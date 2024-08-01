<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea PHP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f8fc; /* Color de fondo pastel claro */
        }
        .container {
            background-color: #ffffff; /* Fondo blanco para el contenedor */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra ligera */
            padding: 20px;
        }
        h1 {
            color: #6a5acd; /* Título en color pastel azul */
        }
        .card {
            background-color: #fafafa; /* Fondo muy suave para la tarjeta */
            border: 1px solid #ddd; /* Borde ligero */
        }
        .card-body {
            background-color: #ffffff; /* Fondo blanco para el contenido de la tarjeta */
            border-radius: 8px;
            padding: 20px;
        }
        p {
            color: #333; /* Color de texto para párrafos */
        }
        .btn-primary {
            background-color: #87cefa; /* Color pastel azul claro para botones */
            border-color: #87cefa;
        }
        .btn-secondary {
            background-color: #ffb6c1; /* Color pastel rosa claro para botones */
            border-color: #ffb6c1;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Resultados de los datos ingresados por defecto</h1>
        <div class="card">
            <div class="card-body">
                <?php
                // a. Declaración de Variables
                $integer = 10; // integer
                $float = 15.5; // float
                $string = "Hola Mundo"; // string
                $boolean = true; // boolean
                $array = array("Manzana", "Banana", "Cereza", "Durazno", "Uva"); // array

                // b. Operaciones Aritméticas
                $suma = $integer + $float;
                $producto = $integer * $float;
                echo "<p><strong>Suma:</strong> $suma</p>";
                echo "<p><strong>Producto:</strong> $producto</p>";

                // c. Manipulación de Cadenas
                $cadena1 = "Hola";
                $cadena2 = "Mundo";
                $concatenacion = $cadena1 . " " . $cadena2;
                $longitud = strlen($concatenacion);
                echo "<p><strong>Concatenación:</strong> $concatenacion</p>";
                echo "<p><strong>Longitud de la cadena:</strong> $longitud</p>";

                // d. Uso de Condicionales
                if ($boolean) {
                    echo "<p><strong>Condicional:</strong> La variable booleana es verdadera</p>";
                } else {
                    echo "<p><strong>Condicional:</strong> La variable booleana es falsa</p>";
                }

                // e. Creación de un Array
                echo "<p><strong>Elemento en el índice 2 del arreglo:</strong> " . $array[2] . "</p>";
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
