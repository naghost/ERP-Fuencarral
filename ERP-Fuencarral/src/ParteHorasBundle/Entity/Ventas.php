<?php

namespace ParteHorasBundle\Entity;

/**
 * Ventas
 */
class Ventas
{
    /**
     * @var integer
     */
    private $idventas;

    /**
     * @var integer
     */
    private $idingresosaux;

    /**
     * @var integer
     */
    private $idempleadosaux;

    /**
     * @var \DateTime
     */
    private $fechaorden;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var \ParteHorasBundle\Entity\Cliente
     */
    private $idclienteaux;


    /**
     * Get idventas
     *
     * @return integer
     */
    public function getIdventas()
    {
        return $this->idventas;
    }

    /**
     * Set idingresosaux
     *
     * @param integer $idingresosaux
     *
     * @return Ventas
     */
    public function setIdingresosaux($idingresosaux)
    {
        $this->idingresosaux = $idingresosaux;

        return $this;
    }

    /**
     * Get idingresosaux
     *
     * @return integer
     */
    public function getIdingresosaux()
    {
        return $this->idingresosaux;
    }

    /**
     * Set idempleadosaux
     *
     * @param integer $idempleadosaux
     *
     * @return Ventas
     */
    public function setIdempleadosaux($idempleadosaux)
    {
        $this->idempleadosaux = $idempleadosaux;

        return $this;
    }

    /**
     * Get idempleadosaux
     *
     * @return integer
     */
    public function getIdempleadosaux()
    {
        return $this->idempleadosaux;
    }

    /**
     * Set fechaorden
     *
     * @param \DateTime $fechaorden
     *
     * @return Ventas
     */
    public function setFechaorden($fechaorden)
    {
        $this->fechaorden = $fechaorden;

        return $this;
    }

    /**
     * Get fechaorden
     *
     * @return \DateTime
     */
    public function getFechaorden()
    {
        return $this->fechaorden;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Ventas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set idclienteaux
     *
     * @param \ParteHorasBundle\Entity\Cliente $idclienteaux
     *
     * @return Ventas
     */
    public function setIdclienteaux(\ParteHorasBundle\Entity\Cliente $idclienteaux = null)
    {
        $this->idclienteaux = $idclienteaux;

        return $this;
    }

    /**
     * Get idclienteaux
     *
     * @return \ParteHorasBundle\Entity\Cliente
     */
    public function getIdclienteaux()
    {
        return $this->idclienteaux;
    }
}

