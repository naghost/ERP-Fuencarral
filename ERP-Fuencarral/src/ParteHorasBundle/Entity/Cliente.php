<?php

namespace ParteHorasBundle\Entity;

/**
 * Cliente
 */
class Cliente
{
    /**
     * @var integer
     */
    private $idcliente;

    /**
     * @var string
     */
    private $nombreempresa;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $direccion;


    /**
     * Get idcliente
     *
     * @return integer
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set nombreempresa
     *
     * @param string $nombreempresa
     *
     * @return Cliente
     */
    public function setNombreempresa($nombreempresa)
    {
        $this->nombreempresa = $nombreempresa;

        return $this;
    }

    /**
     * Get nombreempresa
     *
     * @return string
     */
    public function getNombreempresa()
    {
        return $this->nombreempresa;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Cliente
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
}

