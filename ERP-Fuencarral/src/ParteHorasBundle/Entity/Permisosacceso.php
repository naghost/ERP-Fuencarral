<?php

namespace ParteHorasBundle\Entity;

/**
 * Permisosacceso
 */
class Permisosacceso
{
    /**
     * @var integer
     */
    private $idPermiso;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var boolean
     */
    private $activo;

    /**
     * @var integer
     */
    private $idauxcategoria;

    /**
     * @var \ParteHorasBundle\Entity\Modulo
     */
    private $idauxmodulo;


    /**
     * Get idPermiso
     *
     * @return integer
     */
    public function getIdPermiso()
    {
        return $this->idPermiso;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Permisosacceso
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Permisosacceso
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Permisosacceso
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
     * Set idauxcategoria
     *
     * @param integer $idauxcategoria
     *
     * @return Permisosacceso
     */
    public function setIdauxcategoria($idauxcategoria)
    {
        $this->idauxcategoria = $idauxcategoria;

        return $this;
    }

    /**
     * Get idauxcategoria
     *
     * @return integer
     */
    public function getIdauxcategoria()
    {
        return $this->idauxcategoria;
    }

    /**
     * Set idauxmodulo
     *
     * @param \ParteHorasBundle\Entity\Modulo $idauxmodulo
     *
     * @return Permisosacceso
     */
    public function setIdauxmodulo(\ParteHorasBundle\Entity\Modulo $idauxmodulo = null)
    {
        $this->idauxmodulo = $idauxmodulo;

        return $this;
    }

    /**
     * Get idauxmodulo
     *
     * @return \ParteHorasBundle\Entity\Modulo
     */
    public function getIdauxmodulo()
    {
        return $this->idauxmodulo;
    }
}

