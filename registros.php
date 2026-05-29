```php id="t1q9vm"
<?php

require 'vendor/autoload.php';

$cliente = new MongoDB\Client("mongodb+srv://kevin:JmODk3ZN2zDbgHHY@cluster0.oowbmus.mongodb.net/?appName=Cluster0");

$db = $cliente->prueba;

$coleccion = $db->gustos;

$datos = iterator_to_array($coleccion->find());

?>
```


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Personas Registradas</title>

    <style>

        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a);
            min-height: 100vh;
            padding: 40px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .contenedor{
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0,0,0,0.4);
        }

        h2{
            text-align: center;
            margin-bottom: 30px;
            color: #1e293b;
            font-weight: bold;
        }

        .table thead{
            background: #2563eb;
            color: white;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="contenedor">

        <h2>PERSONAS REGISTRADAS</h2>

        <div class="table-responsive">

            <table class="table table-bordered table-hover text-center">

                <thead>
                    <tr>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Color favorito</th>
                        <th>Comida favorita</th>
                        <th>Literatura y cine</th>
                        <th>Fecha</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach($datos as $dato){ ?>

                    <tr>

                        <td><?= $dato['apellidos'] ?></td>

                        <td><?= $dato['nombres'] ?></td>

                        <td><?= $dato['color'] ?></td>

                        <td><?= $dato['comida'] ?></td>

                        <td><?= $dato['pelicula'] ?></td>

                        <td><?= $dato['registro'] ?></td>

                    </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

        <div class="d-grid mt-4">

            <a href="index.html" class="btn btn-primary">
                Volver al formulario
            </a>

        </div>

    </div>

</div>

</body>
</html>
```
