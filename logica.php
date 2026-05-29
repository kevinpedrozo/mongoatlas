<?php

date_default_timezone_set('America/Bogota');

$hoy = date("Y-m-d H:i:s");

require 'vendor/autoload.php';

$cliente = new MongoDB\Client("mongodb+srv://kevin:JmODk3ZN2zDbgHHY@cluster0.oowbmus.mongodb.net/?appName=Cluster0");

$db = $cliente->prueba;

$coleccion = $db->gustos;

$resultado = $coleccion->insertOne([

    "apellidos" => $_POST["apellidos"],
    "nombres" => $_POST["nombres"],
    "color" => $_POST["color"],
    "comida" => $_POST["comida"],
    "pelicula" => $_POST["pelicula"],
    "registro" => $hoy

]);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro exitoso</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a);
            min-height: 100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family: Arial;
        }

        .mensaje{
            background:white;
            padding:40px;
            border-radius:20px;
            text-align:center;
            box-shadow:0px 10px 30px rgba(0,0,0,0.4);
        }

        h2{
            color:#16a34a;
            margin-bottom:20px;
        }

        p{
            color:#334155;
        }

    </style>

</head>

<body>

    <div class="mensaje">

        <h2> Registro guardado correctamente</h2>

        <p>
            ID insertado:
            <strong>
                <?= $resultado->getInsertedId(); ?>
            </strong>
        </p>

        <div class="d-grid gap-2 mt-4">

            <a href="index.html" class="btn btn-primary">
                Volver al formulario
            </a>

            <a href="registros.php" class="btn btn-dark">
                Ver registros
            </a>

        </div>

    </div>

</body>
</html>

