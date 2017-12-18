<?php

namespace ParteHorasBundle\Entity;

/**
 * Productos
 */
class Productos
{
    /**
     * @var integer
     */
    private $idproducto;

    /**
     * @var string
     */
    private $nombreproducto;

    /**
     * @var float
     */
    private $precio;

    /**
     * @var integer
     */
    private $material;

    /**
     * @var integer
     */
    private $puntoventa;


    /**
     * Get idproducto
     *
     * @return integer
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set nombreproducto
     *
     * @param string $nombreproducto
     *
     * @return Productos
     */
    public function setNombreproducto($nombreproducto)
    {
        $this->nombreproducto = $nombreproducto;

        return $this;
    }

    /**
     * Get nombreproducto
     *
     * @return string
     */
    public function getNombreproducto()
    {
        return $this->nombreproducto;
    }

    /**
     * Set precio
     *
     * @param float $precio
     *
     * @return Productos
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
     * Set material
     *
     * @param integer $material
     *
     * @return Productos
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return integer
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set puntoventa
     *
     * @param integer $puntoventa
     *
     * @return Productos
     */
    public function setPuntoventa($puntoventa)
    {
        $this->puntoventa = $puntoventa;

        return $this;
    }

    /**
     * Get puntoventa
     *
     * @return integer
     */
    public function getPuntoventa()
    {
        return $this->puntoventa;
    }
}

