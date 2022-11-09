<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Document</title>
    
</head>
<body>


<h1>Agregue Un Alumno</h1><br>
<form action="../../Controles/ControladorAlumno.php">

<label for="">Id</label>
<input type="text" id="id1" name="id1">
<br>

<label for="">Nombre</label>
<input type="text" id="name1" name="name1">
<br>

<label for="">Apellido</label>
<input type="text" id="ape1" name="ape1">
<br>

<label for="">Curso</label>
<input type="text" id="curs1"  name="curs1">
<br>
<br>

<input class="btn btn-success"type="submit"     id="btnNewAlumno" name="btnNewAlumno">

<a class="btn btn-danger"href="..\index.php">EXIT TO START</a>
</form>

</body>
</html>