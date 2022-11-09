<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Actualizar Alumno</h1>

<?php

require_once("../../Model/ClassAlumno.php");
$id=$_REQUEST['id'];
$alumno=new Alumno ();
$datos=$alumno-> consultarAlumnoXId($id);

while($data=$datos->fetch(PDO::FETCH_ASSOC)){
    
    print('
        <form action="../../Controles/ControladorAlumno.php" method="post">

        
        ID:      <input type="hidden" value"'. $data['id'].'" name="id1" id="id1"> 
        Nombre:  <input type="text" value"'. $data['Nombre'].'" name="name1" id="name1"> 
        Apellido:<input type="text" value"'. $data['Apellido'].'" name="ape1" id="ape1"> 
        Curso:   <input type="text" value"'. $data['Curso'].'" name="curs1" id="curs1"> 

        <input type="submit" value="Enviar" id="btnActAlumno" name="btnActAlumno">
       </form>
       <a href="../ViewAlumno.php"><button>Regresar</button></a>

    ');
}
?>
</body>
</html>