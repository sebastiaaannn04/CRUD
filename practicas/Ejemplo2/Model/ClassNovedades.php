<?php
 class Alumno{
    public $nombre;
    public $apellido;
    public $correo;
    public $telefono;
    public $programa;

    public function borrarAlumno($idAlumno){
        print("El alumno $idAlumno ha borrado una novedad ");
        print("<br><a href=''> regresar </a>");
    }

    public function Actualizaralumno($idAlumno){
        print("El alumno $idAlumno ha actualizado la novedad ");
        print("<br><a href=''> regresar </a>");
    }

    public function AddAlumno($idAlumno){
        print("El alumno $idAlumno ha actualizado una novedad");
        print("<br><a href='./alumno/ViewAlumno.php'> regresar </a>");
    }



 }
?>