<?php

namespace ParteHorasBundle\Entity;

/**
 * Bajasmedicas
 */
class Bajasmedicas
{
    /**
     * @var integer
     */
    private $idBaja;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $caracteristicas;


    /**
     * Get idBaja
     *
     * @return integer
     */
    public function getIdBaja()
    {
        return $this->idBaja;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Bajasmedicas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set caracteristicas
     *
     * @param string $caracteristicas
     *
     * @return Bajasmedicas
     */
    public function setCaracteristicas($caracteristicas)
    {
        $this->caracteristicas = $caracteristicas;

        return $this;
    }

    /**
     * Get caracteristicas
     *
     * @return string
     */
    public function getCaracteristicas()
    {
        return $this->caracteristicas;
    }
}

