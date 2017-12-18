<?php

namespace ParteHorasBundle\Entity;

/**
 * Proveedoresproductos
 */
class Proveedoresproductos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \ParteHorasBundle\Entity\Proveedores
     */
    private $idproveedor;


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
     * Set precio
     *
     * @param float $precio
     *
     * @return Proveedoresproductos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set idproducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idproducto
     *
     * @return Proveedoresproductos
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
     * Set idproveedor
     *
     * @param \ParteHorasBundle\Entity\Proveedores $idproveedor
     *
     * @return Proveedoresproductos
     */
    public function setIdproveedor(\ParteHorasBundle\Entity\Proveedores $idproveedor = null)
    {
        $this->idproveedor = $idproveedor;

        return $this;
    }

    /**
     * Get idproveedor
     *
     * @return \ParteHorasBundle\Entity\Proveedores
     */
    public function getIdproveedor()
    {
        return $this->idproveedor;
    }
}

