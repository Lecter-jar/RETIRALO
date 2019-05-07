<?php

/**
 * Class TipoRecoleccion
 */
class TipoRecoleccion
{
    // atributos
    private $_id_recoleccion;
    private $_nombre;
    private $_descripcion;

    /**
     * TipoRecoleccion constructor.
     */
    public function __construct()
    {
    } // fin constructor

    /**
     * @return mixed
     */
    public function getIdRecoleccion()
    {
        return $this->_id_recoleccion;
    }

    /**
     * @param mixed $id_recoleccion
     */
    public function setIdRecoleccion($id_recoleccion): void
    {
        $this->_id_recoleccion = $id_recoleccion;
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
    public function getDescripcion()
    {
        return $this->_descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->_descripcion = $descripcion;
    }


} // fin clase