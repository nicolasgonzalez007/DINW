<?php
    $asignatura = $_GET['asignatura'];
    $profesores = $_GET['profesor'];
    $horas = $_GET['horas'];
    $info = $_GET['informacion'];
    echo "Asignatura: " . $asignatura . "<br>";
    echo"Profesor: ";
    foreach($profesores as $profesor) {
        echo "<ul><li>".$profesor."</li></ul>";
    };
    
    /*echo "Profesor: ".$profesores."<br>";*/
    echo "Horas: " . $horas . "<br>";
    echo "Informacion: " . $info;
?>