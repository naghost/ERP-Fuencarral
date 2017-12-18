<?php

namespace ParteHorasBundle\Entity;

/**
 * Proveedores
 */
class Proveedores
{
    /**
     * @var integer
     */
    private $idproveedor;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $direccion;


    /**
     * Get idproveedor
     *
     * @return integer
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proveedores
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
     * Set numero
     *
     * @param string $numero
     *
     * @return Proveedores
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Proveedores
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

