<?php

namespace ParteHorasBundle\Entity;

/**
 * Gestionbajas
 */
class Gestionbajas
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
    private $diaHabiles;

    /**
     * @var \ParteHorasBundle\Entity\Empleados
     */
    private $idEmpleado;

    /**
     * @var \ParteHorasBundle\Entity\Bajasmedicas
     */
    private $idBaja;


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
     * @return Gestionbajas
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
     * @return Gestionbajas
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
     * Set diaHabiles
     *
     * @param integer $diaHabiles
     *
     * @return Gestionbajas
     */
    public function setDiaHabiles($diaHabiles)
    {
        $this->diaHabiles = $diaHabiles;

        return $this;
    }

    /**
     * Get diaHabiles
     *
     * @return integer
     */
    public function getDiaHabiles()
    {
        return $this->diaHabiles;
    }

    /**
     * Set idEmpleado
     *
     * @param \ParteHorasBundle\Entity\Empleados $idEmpleado
     *
     * @return Gestionbajas
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
     * Set idBaja
     *
     * @param \ParteHorasBundle\Entity\Bajasmedicas $idBaja
     *
     * @return Gestionbajas
     */
    public function setIdBaja(\ParteHorasBundle\Entity\Bajasmedicas $idBaja = null)
    {
        $this->idBaja = $idBaja;

        return $this;
    }

    /**
     * Get idBaja
     *
     * @return \ParteHorasBundle\Entity\Bajasmedicas
     */
    public function getIdBaja()
    {
        return $this->idBaja;
    }
}

