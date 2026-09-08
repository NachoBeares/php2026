<?php

class Persona {
    protected String $nombre;
    protected int $edad;

    public function __construct(String $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    public function MostrarInformacion () {
        return "Nombre: " . $this->nombre .
        "<br>Edad: " . $this->edad;
        
    }
}
