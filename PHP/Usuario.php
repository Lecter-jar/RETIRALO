<?php

/**
 * Class Usuario
 */
class Usuario extends Persona
{
    // constructor con parametros implementado por heredacion de clase padre persona
    public function __construct()
    {
        parent::__construct();
    } // fin constructor

    // simulando constructor para obtener solo correo y pass
    static function soloCorreoContraseña($correo, $pass) {
        return new self($correo, $pass);
    }

} // fin clase