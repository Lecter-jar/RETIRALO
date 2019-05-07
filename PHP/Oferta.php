<?php

/**
 * Class Oferta
 */
class Oferta
{
    // atributos
    private $_id_oferta;
    private $_nombre;
    private $_precio;
    private $_fecha_creacion;
    private $_estado;
    private $_id_solicitud;
    private $_id_recolector;


    /**
     * Oferta constructor.
     * @param $_nombre
     * @param $_precio
     * @param $_fecha_creacion
     * @param $_estado
     * @param $_id_solicitud
     * @param $_id_recolector
     */
    public function __construct($_nombre, $_precio, $_fecha_creacion, $_estado, $_id_solicitud, $_id_recolector)
    {
        $this->_nombre = $_nombre;
        $this->_precio = $_precio;
        $this->_fecha_creacion = $_fecha_creacion;
        $this->_estado = $_estado;
        $this->_id_solicitud = $_id_solicitud;
        $this->_id_recolector = $_id_recolector;
    } // fin constructor


    // getter and setters

    /**
     * @return mixed
     */
    public function getIdOferta()
    {
        return $this->_id_oferta;
    }

    /**
     * @param mixed $id_oferta
     */
    public function setIdOferta($id_oferta): void
    {
        $this->_id_oferta = $id_oferta;
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
    public function getPrecio()
    {
        return $this->_precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio): void
    {
        $this->_precio = $precio;
    }

    /**
     * @return mixed
     */
    public function getFechaCreacion()
    {
        return $this->_fecha_creacion;
    }

    /**
     * @param mixed $fecha_creacion
     */
    public function setFechaCreacion($fecha_creacion): void
    {
        $this->_fecha_creacion = $fecha_creacion;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->_estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado): void
    {
        $this->_estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getIdSolicitud()
    {
        return $this->_id_solicitud;
    }

    /**
     * @param mixed $id_solicitud
     */
    public function setIdSolicitud($id_solicitud): void
    {
        $this->_id_solicitud = $id_solicitud;
    }

    /**
     * @return mixed
     */
    public function getIdRecolector()
    {
        return $this->_id_recolector;
    }

    /**
     * @param mixed $id_recolector
     */
    public function setIdRecolector($id_recolector): void
    {
        $this->_id_recolector = $id_recolector;
    }

} // fin clase