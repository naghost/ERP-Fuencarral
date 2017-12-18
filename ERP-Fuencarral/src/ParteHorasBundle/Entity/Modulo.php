<?php

namespace ParteHorasBundle\Entity;

/**
 * Modulo
 */
class Modulo
{
    /**
     * @var integer
     */
    private $idModulo;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;


    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Modulo
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Modulo
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}

