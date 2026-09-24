<?php
    /*var_dump($_GET);*/
    $asignatura=$_GET['asignatura'];
    $profesores=$_GET['profesor'];
    $horas=$_GET['horas'];
    $info=$_GET['informacion'];
    
    if (isset($_GET['asignatura'])) {//Tambien se puede hacer con "empty" pero eso es para saber si esta vacio o no
        echo"Asignatura: ".$asignatura."<br>";
    } else {
        $asignatura=" ";
        echo"Introduce una asignatura<br>";
    }
    
    /*echo "Profesores: ".$profesores."<br>";*/print_r($profesores);
    echo "Horas: ".$horas."<br>";
    echo "Información: ".$info."<br>";


    //Version con print_r
    /*print_r($asignatura);
    
    print_r($horas);
    print_r($info);*/
?>