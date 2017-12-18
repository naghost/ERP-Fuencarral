<?php

namespace ParteHorasBundle\Entity;

/**
 * Partehoras
 */
class Partehoras
{
    /**
     * @var integer
     */
    private $idParte;

    /**
     * @var \DateTime
     */
    private $fechaActual;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $duracion;

    /**
     * @var string
     */
    private $materialUtilizado;

    /**
     * @var \ParteHorasBundle\Entity\Usuarios
     */
    private $idUsuarioAux;

    /**
     * @var \ParteHorasBundle\Entity\Tareas
     */
    private $idTareaAux;


    /**
     * Get idParte
     *
     * @return integer
     */
    public function getIdParte()
    {
        return $this->idParte;
    }

    /**
     * Set fechaActual
     *
     * @param \DateTime $fechaActual
     *
     * @return Partehoras
     */
    public function setFechaActual($fechaActual)
    {
        $this->fechaActual = $fechaActual;

        return $this;
    }

    /**
     * Get fechaActual
     *
     * @return \DateTime
     */
    public function getFechaActual()
    {
        return $this->fechaActual;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Partehoras
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set duracion
     *
     * @param integer $duracion
     *
     * @return Partehoras
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return integer
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set materialUtilizado
     *
     * @param string $materialUtilizado
     *
     * @return Partehoras
     */
    public function setMaterialUtilizado($materialUtilizado)
    {
        $this->materialUtilizado = $materialUtilizado;

        return $this;
    }

    /**
     * Get materialUtilizado
     *
     * @return string
     */
    public function getMaterialUtilizado()
    {
        return $this->materialUtilizado;
    }

    /**
     * Set idUsuarioAux
     *
     * @param \ParteHorasBundle\Entity\Usuarios $idUsuarioAux
     *
     * @return Partehoras
     */
    public function setIdUsuarioAux(\ParteHorasBundle\Entity\Usuarios $idUsuarioAux = null)
    {
        $this->idUsuarioAux = $idUsuarioAux;

        return $this;
    }

    /**
     * Get idUsuarioAux
     *
     * @return \ParteHorasBundle\Entity\Usuarios
     */
    public function getIdUsuarioAux()
    {
        return $this->idUsuarioAux;
    }

    /**
     * Set idTareaAux
     *
     * @param \ParteHorasBundle\Entity\Tareas $idTareaAux
     *
     * @return Partehoras
     */
    public function setIdTareaAux(\ParteHorasBundle\Entity\Tareas $idTareaAux = null)
    {
        $this->idTareaAux = $idTareaAux;

        return $this;
    }

    /**
     * Get idTareaAux
     *
     * @return \ParteHorasBundle\Entity\Tareas
     */
    public function getIdTareaAux()
    {
        return $this->idTareaAux;
    }
}

