<?php

namespace ParteHorasBundle\Entity;

/**
 * Empleados
 */
class Empleados
{
    /**
     * @var integer
     */
    private $idEmpleado;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellidos;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $direccionprivada;

    /**
     * @var string
     */
    private $nacionalidad;

    /**
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @var integer
     */
    private $tlfmovil;

    /**
     * @var integer
     */
    private $tlfempresa;

    /**
     * @var string
     */
    private $direcciontrabajo;

    /**
     * @var string
     */
    private $ubicaciontrabajo;

    /**
     * @var integer
     */
    private $idResponsable;

    /**
     * @var \ParteHorasBundle\Entity\Categoria
     */
    private $idCategoria;

    /**
     * @var \ParteHorasBundle\Entity\Departamentos
     */
    private $idDepartamento;


    /**
     * Get idEmpleado
     *
     * @return integer
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empleados
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Empleados
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Empleados
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set direccionprivada
     *
     * @param string $direccionprivada
     *
     * @return Empleados
     */
    public function setDireccionprivada($direccionprivada)
    {
        $this->direccionprivada = $direccionprivada;

        return $this;
    }

    /**
     * Get direccionprivada
     *
     * @return string
     */
    public function getDireccionprivada()
    {
        return $this->direccionprivada;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     *
     * @return Empleados
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     *
     * @return Empleados
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set tlfmovil
     *
     * @param integer $tlfmovil
     *
     * @return Empleados
     */
    public function setTlfmovil($tlfmovil)
    {
        $this->tlfmovil = $tlfmovil;

        return $this;
    }

    /**
     * Get tlfmovil
     *
     * @return integer
     */
    public function getTlfmovil()
    {
        return $this->tlfmovil;
    }

    /**
     * Set tlfempresa
     *
     * @param integer $tlfempresa
     *
     * @return Empleados
     */
    public function setTlfempresa($tlfempresa)
    {
        $this->tlfempresa = $tlfempresa;

        return $this;
    }

    /**
     * Get tlfempresa
     *
     * @return integer
     */
    public function getTlfempresa()
    {
        return $this->tlfempresa;
    }

    /**
     * Set direcciontrabajo
     *
     * @param string $direcciontrabajo
     *
     * @return Empleados
     */
    public function setDirecciontrabajo($direcciontrabajo)
    {
        $this->direcciontrabajo = $direcciontrabajo;

        return $this;
    }

    /**
     * Get direcciontrabajo
     *
     * @return string
     */
    public function getDirecciontrabajo()
    {
        return $this->direcciontrabajo;
    }

    /**
     * Set ubicaciontrabajo
     *
     * @param string $ubicaciontrabajo
     *
     * @return Empleados
     */
    public function setUbicaciontrabajo($ubicaciontrabajo)
    {
        $this->ubicaciontrabajo = $ubicaciontrabajo;

        return $this;
    }

    /**
     * Get ubicaciontrabajo
     *
     * @return string
     */
    public function getUbicaciontrabajo()
    {
        return $this->ubicaciontrabajo;
    }

    /**
     * Set idResponsable
     *
     * @param integer $idResponsable
     *
     * @return Empleados
     */
    public function setIdResponsable($idResponsable)
    {
        $this->idResponsable = $idResponsable;

        return $this;
    }

    /**
     * Get idResponsable
     *
     * @return integer
     */
    public function getIdResponsable()
    {
        return $this->idResponsable;
    }

    /**
     * Set idCategoria
     *
     * @param \ParteHorasBundle\Entity\Categoria $idCategoria
     *
     * @return Empleados
     */
    public function setIdCategoria(\ParteHorasBundle\Entity\Categoria $idCategoria = null)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return \ParteHorasBundle\Entity\Categoria
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idDepartamento
     *
     * @param \ParteHorasBundle\Entity\Departamentos $idDepartamento
     *
     * @return Empleados
     */
    public function setIdDepartamento(\ParteHorasBundle\Entity\Departamentos $idDepartamento = null)
    {
        $this->idDepartamento = $idDepartamento;

        return $this;
    }

    /**
     * Get idDepartamento
     *
     * @return \ParteHorasBundle\Entity\Departamentos
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }
}

