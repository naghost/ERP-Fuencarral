<?php

namespace ParteHorasBundle\Entity;

/**
 * Puntodeventa
 */
class Puntodeventa
{
    /**
     * @var integer
     */
    private $idpuntoventa;

    /**
     * @var \DateTime
     */
    private $fechaventa;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idproducto;

    /**
     * @var \ParteHorasBundle\Entity\Empleados
     */
    private $idempleado;


    /**
     * Get idpuntoventa
     *
     * @return integer
     */
    public function getIdpuntoventa()
    {
        return $this->idpuntoventa;
    }

    /**
     * Set fechaventa
     *
     * @param \DateTime $fechaventa
     *
     * @return Puntodeventa
     */
    public function setFechaventa($fechaventa)
    {
        $this->fechaventa = $fechaventa;

        return $this;
    }

    /**
     * Get fechaventa
     *
     * @return \DateTime
     */
    public function getFechaventa()
    {
        return $this->fechaventa;
    }

    /**
     * Set idproducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idproducto
     *
     * @return Puntodeventa
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
     * Set idempleado
     *
     * @param \ParteHorasBundle\Entity\Empleados $idempleado
     *
     * @return Puntodeventa
     */
    public function setIdempleado(\ParteHorasBundle\Entity\Empleados $idempleado = null)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return \ParteHorasBundle\Entity\Empleados
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }
}

