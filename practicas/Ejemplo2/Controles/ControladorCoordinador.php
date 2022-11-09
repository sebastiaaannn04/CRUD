<?php
include_once("..\Model\ClassCoordinador.php");

if(isset($_REQUEST["id"])){

    $Alumno=new Alumno();
    $Alumno -> nombre - "sebas";

    header("location:../View/alumno/addAlumno.php");

}elseif(isset($_REQUEST["id"])){

    $Alumno=new Alumno();
    $Alumno -> borrarAlumno(12345);

}elseif(isset($_REQUEST["btnNewAlumno"])){
    
    $Alumno=new Alumno();
    $Alumno -> Actualizaralumno(1234,"sebas","cuervo","siuuu@gmail.com");

}

?>