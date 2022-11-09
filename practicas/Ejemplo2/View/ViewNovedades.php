<html>
<h1>NOVEDAD</h1>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class="col-md-8">
<table class="table">
  <thead class="table-success table-striped"></thead>
    <tr>
        <th>
            <form action="../View/formNovedad.php" method="REQUEST">
            <input type="submit" value="Add" class="btn btn-info"  id="btnNewAlumno" name="btnNewAlumno"></input>
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
  <tr>

   <td>05</td>
    <td>Sebastian</td>
    <td>Cuervo</td>
    <td>ADSO</td>

    <td><a class="btn btn-success" href="">Cambiar</a></td>
    <td><a class="btn btn-danger" href="">Borrar</a></td>

  </tr>
  
</table>

<a class="btn btn-info"  href="..\View\index.php">Roles</a>

</div>
</html>