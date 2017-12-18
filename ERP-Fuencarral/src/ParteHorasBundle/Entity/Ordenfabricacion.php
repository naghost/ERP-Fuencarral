<?php

namespace ParteHorasBundle\Entity;

/**
 * Ordenfabricacion
 */
class Ordenfabricacion
{
    /**
     * @var integer
     */
    private $idorden;

    /**
     * @var integer
     */
    private $cantidad;


    /**
     * Get idorden
     *
     * @return integer
     */
    public function getIdorden()
    {
        return $this->idorden;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Ordenfabricacion
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
}

