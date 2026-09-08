<?php
class Estudiante extends Persona {
   private String $Curso;
   
   public function __construct( String $nombre, int $edad, String $Curso) {

    parent::__construct( $nombre, $edad);
    $this->Curso = $Curso;
   }
   
    public function MostrarInformacion() {
        return "Nombre: " . $this->nombre .
               "<br>Edad: " . $this->edad .
               "<br>Curso: " . $this->Curso;
    }
}
