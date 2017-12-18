<?php

namespace ParteHorasBundle\Entity;

/**
 * Permisosvacaciones
 */
class Permisosvacaciones
{
    /**
     * @var integer
     */
    private $idpermiso;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $caracteristicas;


    /**
     * Get idpermiso
     *
     * @return integer
     */
    public function getIdpermiso()
    {
        return $this->idpermiso;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Permisosvacaciones
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
     * @return Permisosvacaciones
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

