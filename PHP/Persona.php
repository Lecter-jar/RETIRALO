<?php


/**
 * Class Persona
 */
class Persona
{
    // atributos
    private $_id;
    private $_rut;
    private $_nombre;
    private $_apellido;
    private $_fecha_nacimiento;
    private $_telefono;
    private $_email;
    private $_contrasena;
    private $_estado;


    /**
     * Persona constructor.
     * @param $_id
     * @param $_rut
     * @param $_nombre
     * @param $_apellido
     * @param $_fecha_nacimiento
     * @param $_telefono
     * @param $_email
     * @param $_contrasena
     * @param $_estado
     */
    public function __construct($_rut, $_nombre, $_apellido, $_fecha_nacimiento, $_telefono, $_email, $_contrasena, $_estado)
    {
        $this->_rut = $_rut;
        $this->_nombre = $_nombre;
        $this->_apellido = $_apellido;
        $this->_fecha_nacimiento = $_fecha_nacimiento;
        $this->_telefono = $_telefono;
        $this->_email = $_email;
        $this->_contrasena = $_contrasena;
        $this->_estado = $_estado;

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
    public function getRut()
    {
        return $this->_rut;
    }

    /**
     * @param mixed $rut
     */
    public function setRut($rut): void
    {
        $this->_rut = $rut;
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
    public function getApellido()
    {
        return $this->_apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->_apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->_fecha_nacimiento;
    }

    /**
     * @param mixed $fecha_nacimiento
     */
    public function setFechaNacimiento($fecha_nacimiento): void
    {
        $this->_fecha_nacimiento = $fecha_nacimiento;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->_telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->_telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->_contrasena;
    }

    /**
     * @param mixed $contrasena
     */
    public function setContrasena($contrasena): void
    {
        $this->_contrasena = $contrasena;
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



} // fin clase