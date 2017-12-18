<?php

namespace ParteHorasBundle\Entity;

/**
 * Compran
 */
class Compran
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ParteHorasBundle\Entity\Compra
     */
    private $idCompra;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idProducto;


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
     * Set idCompra
     *
     * @param \ParteHorasBundle\Entity\Compra $idCompra
     *
     * @return Compran
     */
    public function setIdCompra(\ParteHorasBundle\Entity\Compra $idCompra = null)
    {
        $this->idCompra = $idCompra;

        return $this;
    }

    /**
     * Get idCompra
     *
     * @return \ParteHorasBundle\Entity\Compra
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * Set idProducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idProducto
     *
     * @return Compran
     */
    public function setIdProducto(\ParteHorasBundle\Entity\Productos $idProducto = null)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return \ParteHorasBundle\Entity\Productos
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }
}

