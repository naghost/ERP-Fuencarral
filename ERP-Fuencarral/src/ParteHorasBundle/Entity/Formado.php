<?php

namespace ParteHorasBundle\Entity;

/**
 * Formado
 */
class Formado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ParteHorasBundle\Entity\Pedidos
     */
    private $idpedido;

    /**
     * @var \ParteHorasBundle\Entity\Productos
     */
    private $idproducto;


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
     * Set idpedido
     *
     * @param \ParteHorasBundle\Entity\Pedidos $idpedido
     *
     * @return Formado
     */
    public function setIdpedido(\ParteHorasBundle\Entity\Pedidos $idpedido = null)
    {
        $this->idpedido = $idpedido;

        return $this;
    }

    /**
     * Get idpedido
     *
     * @return \ParteHorasBundle\Entity\Pedidos
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    /**
     * Set idproducto
     *
     * @param \ParteHorasBundle\Entity\Productos $idproducto
     *
     * @return Formado
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
}

