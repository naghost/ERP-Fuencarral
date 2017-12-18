<?php

namespace ParteHorasBundle\Entity;

/**
 * Compra
 */
class Compra
{
    /**
     * @var integer
     */
    private $idCompra;

    /**
     * @var string
     */
    private $nombreCompra;

    /**
     * @var \DateTime
     */
    private $fechaCompra;

    /**
     * @var integer
     */
    private $idGasto;

    /**
     * @var string
     */
    private $destinoCompra;

    /**
     * @var \ParteHorasBundle\Entity\Pedidos
     */
    private $idPedido;


    /**
     * Get idCompra
     *
     * @return integer
     */
    public function getIdCompra()
    {
        return $this->idCompra;
    }

    /**
     * Set nombreCompra
     *
     * @param string $nombreCompra
     *
     * @return Compra
     */
    public function setNombreCompra($nombreCompra)
    {
        $this->nombreCompra = $nombreCompra;

        return $this;
    }

    /**
     * Get nombreCompra
     *
     * @return string
     */
    public function getNombreCompra()
    {
        return $this->nombreCompra;
    }

    /**
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     *
     * @return Compra
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set idGasto
     *
     * @param integer $idGasto
     *
     * @return Compra
     */
    public function setIdGasto($idGasto)
    {
        $this->idGasto = $idGasto;

        return $this;
    }

    /**
     * Get idGasto
     *
     * @return integer
     */
    public function getIdGasto()
    {
        return $this->idGasto;
    }

    /**
     * Set destinoCompra
     *
     * @param string $destinoCompra
     *
     * @return Compra
     */
    public function setDestinoCompra($destinoCompra)
    {
        $this->destinoCompra = $destinoCompra;

        return $this;
    }

    /**
     * Get destinoCompra
     *
     * @return string
     */
    public function getDestinoCompra()
    {
        return $this->destinoCompra;
    }

    /**
     * Set idPedido
     *
     * @param \ParteHorasBundle\Entity\Pedidos $idPedido
     *
     * @return Compra
     */
    public function setIdPedido(\ParteHorasBundle\Entity\Pedidos $idPedido = null)
    {
        $this->idPedido = $idPedido;

        return $this;
    }

    /**
     * Get idPedido
     *
     * @return \ParteHorasBundle\Entity\Pedidos
     */
    public function getIdPedido()
    {
        return $this->idPedido;
    }
}

