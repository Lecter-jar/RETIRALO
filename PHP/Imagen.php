<?php

/**
 * Class Imagen
 */
class Imagen
{
    // atributos
    private $_id_imagen;
    private $_nombre;
    private $_bash;
    private $_ruta;

    /**
     * Imagen constructor.
     * @param $_nombre
     * @param $_bash
     * @param $_ruta
     */
    public function __construct($_nombre, $_bash, $_ruta)
    {
        $this->_nombre = $_nombre;
        $this->_bash = $_bash;
        $this->_ruta = $_ruta;
    } // fin constructor

    // getter and setters

    /**
     * @return mixed
     */
    public function getIdImagen()
    {
        return $this->_id_imagen;
    }

    /**
     * @param mixed $id_imagen
     */
    public function setIdImagen($id_imagen): void
    {
        $this->_id_imagen = $id_imagen;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->_nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getBash()
    {
        return $this->_bash;
    }

    /**
     * @param mixed $bash
     */
    public function setBash($bash): void
    {
        $this->_bash = $bash;
    }

    /**
     * @return mixed
     */
    public function getRuta()
    {
        return $this->_ruta;
    }

    /**
     * @param mixed $ruta
     */
    public function setRuta($ruta): void
    {
        $this->_ruta = $ruta;
    }


} // fin clase