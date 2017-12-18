<?php

namespace ParteHorasBundle\Entity;

/**
 * Categoria
 */
class Categoria
{
    /**
     * @var integer
     */
    private $idCategoria;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $caracteristicas;


    /**
     * Get idCategoria
     *
     * @return integer
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Categoria
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
     * @return Categoria
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

