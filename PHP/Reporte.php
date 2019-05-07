<?php

/**
 * Class Reporte
 */
class Reporte
{
    // atributos
    private $_id;
    private $_id_tipo;
    private $_fecha_creacion;
    private $_comentario;
    private $_id_recolector;
    private $_id_usuario;
    private $_id_solicitud;
    private $_id_moderador;
    private $_estado;
    private $_comentario_estado;

    /**
     * Reporte constructor.
     * @param $_id_tipo
     * @param $_fecha_creacion
     * @param $_comentario
     * @param $_id_recolector
     * @param $_id_usuario
     * @param $_id_solicitud
     * @param $_id_moderador
     * @param $_estado
     * @param $_comentario_estado
     */
    public function __construct($_id_tipo, $_fecha_creacion, $_comentario, $_id_recolector, $_id_usuario, $_id_solicitud, $_id_moderador, $_estado, $_comentario_estado)
    {
        $this->_id_tipo = $_id_tipo;
        $this->_fecha_creacion = $_fecha_creacion;
        $this->_comentario = $_comentario;
        $this->_id_recolector = $_id_recolector;
        $this->_id_usuario = $_id_usuario;
        $this->_id_solicitud = $_id_solicitud;
        $this->_id_moderador = $_id_moderador;
        $this->_estado = $_estado;
        $this->_comentario_estado = $_comentario_estado;
    } // fin constructor


    // getter and setters

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getIdTipo()
    {
        return $this->_id_tipo;
    }

    /**
     * @param mixed $id_tipo
     */
    public function setIdTipo($id_tipo): void
    {
        $this->_id_tipo = $id_tipo;
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
    public function getComentario()
    {
        return $this->_comentario;
    }

    /**
     * @param mixed $comentario
     */
    public function setComentario($comentario): void
    {
        $this->_comentario = $comentario;
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

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->_id_usuario;
    }

    /**
     * @param mixed $id_usuario
     */
    public function setIdUsuario($id_usuario): void
    {
        $this->_id_usuario = $id_usuario;
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
    public function getIdModerador()
    {
        return $this->_id_moderador;
    }

    /**
     * @param mixed $id_moderador
     */
    public function setIdModerador($id_moderador): void
    {
        $this->_id_moderador = $id_moderador;
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
    public function getComentarioEstado()
    {
        return $this->_comentario_estado;
    }

    /**
     * @param mixed $comentario_estado
     */
    public function setComentarioEstado($comentario_estado): void
    {
        $this->_comentario_estado = $comentario_estado;
    }


} // fin clase