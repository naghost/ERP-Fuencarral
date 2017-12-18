<?php

namespace ParteHorasBundle\Entity;

/**
 * Almacen
 */
class Almacen
{
    /**
     * @var integer
     */
    private $idalmacen;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $direccion;


    /**
     * Get idalmacen
     *
     * @return integer
     */
    public function getIdalmacen()
    {
        return $this->idalmacen;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Almacen
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Almacen
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
}

