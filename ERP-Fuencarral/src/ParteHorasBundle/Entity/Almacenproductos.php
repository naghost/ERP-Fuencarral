<?php

namespace ParteHorasBundle\Entity;

/**
 * Almacenproductos
 */
class Almacenproductos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \ParteHorasBundle\Entity\Almacen
     */
    private $idalmacen;


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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Almacenproductos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idproducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idproducto
     *
     * @return Almacenproductos
     */
    public function setIdproducto(\ParteHorasBundle\Entity\Productos $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \ParteHorasBundle\Entity\Productos
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set idalmacen
     *
     * @param \ParteHorasBundle\Entity\Almacen $idalmacen
     *
     * @return Almacenproductos
     */
    public function setIdalmacen(\ParteHorasBundle\Entity\Almacen $idalmacen = null)
    {
        $this->idalmacen = $idalmacen;

        return $this;
    }

    /**
     * Get idalmacen
     *
     * @return \ParteHorasBundle\Entity\Almacen
     */
    public function getIdalmacen()
    {
        return $this->idalmacen;
    }
}

