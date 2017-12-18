<?php

namespace ParteHorasBundle\Entity;

/**
 * Pedidos
 */
class Pedidos
{
    /**
     * @var integer
     */
    private $idpedido;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var \DateTime
     */
    private $tiempoMaximo;

    /**
     * @var string
     */
    private $referenciaPedido;


    /**
     * Get idpedido
     *
     * @return integer
     */
    public function getIdpedido()
    {
        return $this->idpedido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Pedidos
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

    /**
     * Set tiempoMaximo
     *
     * @param \DateTime $tiempoMaximo
     *
     * @return Pedidos
     */
    public function setTiempoMaximo($tiempoMaximo)
    {
        $this->tiempoMaximo = $tiempoMaximo;

        return $this;
    }

    /**
     * Get tiempoMaximo
     *
     * @return \DateTime
     */
    public function getTiempoMaximo()
    {
        return $this->tiempoMaximo;
    }

    /**
     * Set referenciaPedido
     *
     * @param string $referenciaPedido
     *
     * @return Pedidos
     */
    public function setReferenciaPedido($referenciaPedido)
    {
        $this->referenciaPedido = $referenciaPedido;

        return $this;
    }

    /**
     * Get referenciaPedido
     *
     * @return string
     */
    public function getReferenciaPedido()
    {
        return $this->referenciaPedido;
    }
}

