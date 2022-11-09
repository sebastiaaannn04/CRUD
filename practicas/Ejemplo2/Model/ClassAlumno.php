<?php
 class Alumno{
    public $nombre;
    public $apellido;
    public $curso;
    public $id;

    public function borrarAlumno($id){

        require_once("../dao/conectar.php");
        $conn= connect();
        $sql= "delete from alumno where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta ->execute(Array($id));
        $conn=null;

    
    print("El alumno $id ha sido borrado");
        print("<br><a href='..\View\ViewAlumno.php'> regresar </a>");
    }

    public function Actualizaralumno($nombre,$apellido,$curso,$id){
        require_once("../dao/conectar.php");
        $conn=connect();
        $sql="UPDATE alumno SET Nombre=? , Apellido= ?, Curso= ? WHERE id=?;";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute((Array($nombre,$apellido,$curso,$id)));
        $conn= null;
        header("location:../View/ViewAlumno.php");
    }

    public function AddAlumno($nombre,$apellido,$curso,$id ){
        require_once("../dao/conectar.php");
        $conn= connect();
        $sql= "insert into alumno ( id,Nombre, Apellido, Curso) values(?,?,?,?)";
        $consulta = $conn -> prepare($sql);
        $consulta -> execute(Array($nombre,$apellido,$curso,$id));
        $conn=null;
        print("El alumno  ha sido agregado");
        print("<br><a href='../View/ViewAlumno.php'> regresar </a>");
    }


    public function consultarAlumno(){
    require_once("../dao/conectar.php");
    $conn= connect();
    $sql= "select*from alumno";
    $consulta = $conn -> prepare($sql);
    $consulta ->execute();
    return $consulta;
    $conn=null;
    }


    public function consultarAlumnoXId($id){
        require_once("../../dao/conectar.php");
        $conn= connect();
        $sql= "select * from alumno where id = ?";
        $consulta = $conn -> prepare($sql);
        $consulta ->execute((Array($id)));
        return $consulta;
        $conn=null;
    }

}
?>