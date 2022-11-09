<html>
<H1>ALUMNO</H1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<?php

require_once("../Model/ClassAlumno.php");
$alumno = new alumno();
$datos=$alumno->consultarAlumno();

print('

<div class="col-md-8">
<table class="table">
  <thead class="table-success table-striped">
    <tr>
        <th>
            <form action="../Controles/ControladorAlumno.php" method="REQUEST">
            <input type="submit" value="Add" class="btn btn-info"  id="btnAddAlumno" name="btnAddAlumno"></input>
            <a class="btn btn-info"  href="..\View\index.php">Roles</a>
            </form>
            
        </th>
    </tr>

  <tr>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Curso</th>
    <th>update</th>
    <th>delete</th>

  </tr>
</thead>
</div>

');


while($data=$datos -> fetch(PDO::FETCH_ASSOC)){
print('
<div>
<tbody>
<tr>

    <td>'.$data["id"].'</td>
    <td>'.$data["Nombre"].'</td>
    <td>'.$data["Apellido"].'</td>
    <td>'.$data["Curso"].'</td>

    <td><a class="btn btn-success" name="" id="" href="../Controles/ControladorAlumno.php?id='.$data["id"].' &value=Actualiza">Cambiar</a></td>
    <td><a class="btn btn-danger" href="../Controles/ControladorAlumno.php?id='.$data["id"].' &value=Borra">Borrar</a></td>

  </tr>
  
  

  </tbody>
  </div>'

  );
}

?>

</html>