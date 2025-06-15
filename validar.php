<?php

    $nom = $_POST['nom'];

    $edad = $_POST['edad'];

    $pais = $_POST['pais'];

    $ciudad = $_POST['ciudad'];

    $test = $_POST['test'];


    echo $nom;
    echo "<br>";
    echo $edad;
    echo "<br>";
    echo $pais;
    echo "<br>";
    echo $ciudad;
    echo "<br>";
    echo $test;
    echo "<br>";
    echo "¡Gracias por compartir su testimonio! Su información ha sido recibida.";

    header("location: confirmacion.html");




?>