<?php

namespace ParteHorasBundle\Entity;

/**
 * Usuarios
 */
class Usuarios
{
    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var string
     */
    private $loguin;

    /**
     * @var string
     */
    private $contrasena;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idauxempleado;

    /**
     * @var \ParteHorasBundle\Entity\Permisosacceso
     */
    private $idauxpermiso;


    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set loguin
     *
     * @param string $loguin
     *
     * @return Usuarios
     */
    public function setLoguin($loguin)
    {
        $this->loguin = $loguin;

        return $this;
    }

    /**
     * Get loguin
     *
     * @return string
     */
    public function getLoguin()
    {
        return $this->loguin;
    }

    /**
     * Set contrasena
     *
     * @param string $contrasena
     *
     * @return Usuarios
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set idauxempleado
     *
     * @param integer $idauxempleado
     *
     * @return Usuarios
     */
    public function setIdauxempleado($idauxempleado)
    {
        $this->idauxempleado = $idauxempleado;

        return $this;
    }

    /**
     * Get idauxempleado
     *
     * @return integer
     */
    public function getIdauxempleado()
    {
        return $this->idauxempleado;
    }

    /**
     * Set idauxpermiso
     *
     * @param \ParteHorasBundle\Entity\Permisosacceso $idauxpermiso
     *
     * @return Usuarios
     */
    public function setIdauxpermiso(\ParteHorasBundle\Entity\Permisosacceso $idauxpermiso = null)
    {
        $this->idauxpermiso = $idauxpermiso;

        return $this;
    }

    /**
     * Get idauxpermiso
     *
     * @return \ParteHorasBundle\Entity\Permisosacceso
     */
    public function getIdauxpermiso()
    {
        return $this->idauxpermiso;
    }
}

