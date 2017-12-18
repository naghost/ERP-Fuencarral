<?php

namespace ParteHorasBundle\Entity;

/**
 * Departamentos
 */
class Departamentos
{
    /**
     * @var integer
     */
    private $idDepartamento;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $caracteristicas;


    /**
     * Get idDepartamento
     *
     * @return integer
     */
    public function getIdDepartamento()
    {
        return $this->idDepartamento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Departamentos
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
     * Set caracteristicas
     *
     * @param string $caracteristicas
     *
     * @return Departamentos
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

