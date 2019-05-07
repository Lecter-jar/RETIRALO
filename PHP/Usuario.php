<?php

/**
 * Class Usuario
 */
class Usuario extends Persona
{
    // constructor con parametros implementado por heredacion de clase padre persona
    public function __construct($_rut, $_nombre, $_apellido, $_fecha_nacimiento, $_telefono, $_email, $_contrasena, $_estado)
    {
        parent::__construct($_rut, $_nombre, $_apellido, $_fecha_nacimiento, $_telefono, $_email, $_contrasena, $_estado);
    } // fin constructor

} // fin clase