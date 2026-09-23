<?php
    $asignatura=$_GET['asignatura'];
    $profesores=$_GET['profesor'];
    $horas=$_GET['horas'];
    $info=$_GET['informacion'];
    echo "Asignatura: ".$asignatura."<br>";
    echo "Profesores: ".$profesores."<br>";
    echo "Horas: ".$horas."<br>";
    echo "Información: ".$info."<br>";


    //Version con print_r
    print_r($asignatura);
    print_r($profesores);
    print_r($horas);
    print_r($info);
?>