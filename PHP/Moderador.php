<?php

/**
 * Class Moderador
 */
class Moderador extends Persona
{
    // constructor con parametros implementado por heredacion de persona
    public function __construct($_rut, $_nombre, $_apellido, $_email, $_contrasena, $_estado)
    {
       parent::__construct($_rut, $_nombre, $_apellido, $_email, $_contrasena, $_estado);
    } // fin constructor

} // fin clase