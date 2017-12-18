<?php

namespace ParteHorasBundle\Entity;

/**
 * Gestionpermisos
 */
class Gestionpermisos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var integer
     */
    private $diasHabiles;

    /**
     * @var \ParteHorasBundle\Entity\Empleados
     */
    private $idEmpleado;

    /**
     * @var \ParteHorasBundle\Entity\Permisosvacaciones
     */
    private $idPermiso;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     *
     * @return Gestionpermisos
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Gestionpermisos
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set diasHabiles
     *
     * @param integer $diasHabiles
     *
     * @return Gestionpermisos
     */
    public function setDiasHabiles($diasHabiles)
    {
        $this->diasHabiles = $diasHabiles;

        return $this;
    }

    /**
     * Get diasHabiles
     *
     * @return integer
     */
    public function getDiasHabiles()
    {
        return $this->diasHabiles;
    }

    /**
     * Set idEmpleado
     *
     * @param \ParteHorasBundle\Entity\Empleados $idEmpleado
     *
     * @return Gestionpermisos
     */
    public function setIdEmpleado(\ParteHorasBundle\Entity\Empleados $idEmpleado = null)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
    }

    /**
     * Get idEmpleado
     *
     * @return \ParteHorasBundle\Entity\Empleados
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set idPermiso
     *
     * @param \ParteHorasBundle\Entity\Permisosvacaciones $idPermiso
     *
     * @return Gestionpermisos
     */
    public function setIdPermiso(\ParteHorasBundle\Entity\Permisosvacaciones $idPermiso = null)
    {
        $this->idPermiso = $idPermiso;

        return $this;
    }

    /**
     * Get idPermiso
     *
     * @return \ParteHorasBundle\Entity\Permisosvacaciones
     */
    public function getIdPermiso()
    {
        return $this->idPermiso;
    }
}

