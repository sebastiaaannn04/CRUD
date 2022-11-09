<?php
include_once("..\Model\ClassAlumno.php");

if(!isset($_REQUEST['id'])){
    $_REQUEST['id'] = 0;
}

if(!isset($_REQUEST["alumno"])){
   //BORRAR
    if(($_REQUEST['id']!=null)&&($_REQUEST["value"]=="Borra")){
    $id=$_REQUEST['id'];
    $alumno= new Alumno();
    $alumno-> borrarAlumno($id);
    //AGREGAR 
    }elseif(isset($_REQUEST["btnAddAlumno"])){
        header("location:../View/alumno/addAlumno.php");
    }elseif(isset($_REQUEST["btnNewAlumno"]) && ($_REQUEST["btnNewAlumno"]  !=null)){
        $id= $_REQUEST['id1'];
        $nombre= $_REQUEST['name1'];
        $apellido= $_REQUEST['ape1'];
        $curso= $_REQUEST['curs1'];
        $alumno= New Alumno();
        $alumno -> addAlumno($id, $nombre, $apellido, $curso);
    }elseif(($_REQUEST["id"] != null ) && ($_REQUEST["value"]=="Actualiza")){
        header("location:../View/alumno/actAlumno.php?id=".$_REQUEST["id"]);
    //ACTUALIZAR
}elseif(isset($_REQUEST["btnActAlumno"]) && ($_REQUEST["btnActAlumno"]  !=null)){
    $id= $_REQUEST['id1'];
    $nombre= $_REQUEST['name1'];
    $apellido= $_REQUEST['ape1'];
    $curso= $_REQUEST['curs1'];
    $alumno= new Alumno();
    $alumno -> Actualizaralumno($nombre, $apellido, $curso, $id);
}
}elseif($_REQUEST["alumno"]==1){
    header("location:../View/ViewAlumno.php");
}
?>