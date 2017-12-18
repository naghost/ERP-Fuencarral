<?php

namespace ParteHorasBundle\Entity;

/**
 * Proyecto
 */
class Proyecto
{
    /**
     * @var integer
     */
    private $idProyecto;

    /**
     * @var string
     */
    private $tituloProyecto;

    /**
     * @var string
     */
    private $descripcionProyecto;

    /**
     * @var string
     */
    private $jefeProyecto;


    /**
     * Get idProyecto
     *
     * @return integer
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set tituloProyecto
     *
     * @param string $tituloProyecto
     *
     * @return Proyecto
     */
    public function setTituloProyecto($tituloProyecto)
    {
        $this->tituloProyecto = $tituloProyecto;

        return $this;
    }

    /**
     * Get tituloProyecto
     *
     * @return string
     */
    public function getTituloProyecto()
    {
        return $this->tituloProyecto;
    }

    /**
     * Set descripcionProyecto
     *
     * @param string $descripcionProyecto
     *
     * @return Proyecto
     */
    public function setDescripcionProyecto($descripcionProyecto)
    {
        $this->descripcionProyecto = $descripcionProyecto;

        return $this;
    }

    /**
     * Get descripcionProyecto
     *
     * @return string
     */
    public function getDescripcionProyecto()
    {
        return $this->descripcionProyecto;
    }

    /**
     * Set jefeProyecto
     *
     * @param string $jefeProyecto
     *
     * @return Proyecto
     */
    public function setJefeProyecto($jefeProyecto)
    {
        $this->jefeProyecto = $jefeProyecto;

        return $this;
    }

    /**
     * Get jefeProyecto
     *
     * @return string
     */
    public function getJefeProyecto()
    {
        return $this->jefeProyecto;
    }
}

