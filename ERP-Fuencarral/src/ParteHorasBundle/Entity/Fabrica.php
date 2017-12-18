<?php

namespace ParteHorasBundle\Entity;

/**
 * Fabrica
 */
class Fabrica
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \ParteHorasBundle\Entity\Ordenfabricacion
     */
    private $idorden;


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
     * Set idproducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idproducto
     *
     * @return Fabrica
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
     * Set idorden
     *
     * @param \ParteHorasBundle\Entity\Ordenfabricacion $idorden
     *
     * @return Fabrica
     */
    public function setIdorden(\ParteHorasBundle\Entity\Ordenfabricacion $idorden = null)
    {
        $this->idorden = $idorden;

        return $this;
    }

    /**
     * Get idorden
     *
     * @return \ParteHorasBundle\Entity\Ordenfabricacion
     */
    public function getIdorden()
    {
        return $this->idorden;
    }
}

