<?php
 class Alumno{
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    public function borrarAlumno($idAlumno){
        print("El coordinador ha borrado a $idAlumno");
        print("<br><a href=''> regresar </a>");
    }

    public function Actualizaralumno($idAlumno){
        print("El coordinador actualizo a $idAlumno");
        print("<br><a href=''> regresar </a>");
    }

    public function AddAlumno($idAlumno){
        print("El cordinador ha agregado a  $idAlumno");
        print("<br><a href='.\ViewViewAlumno.php'> regresar </a>");
    }



 }
?>