<?php

namespace ParteHorasBundle\Entity;

/**
 * Tareas
 */
class Tareas
{
    /**
     * @var integer
     */
    private $idtarea;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $estado;


    /**
     * Get idtarea
     *
     * @return integer
     */
    public function getIdtarea()
    {
        return $this->idtarea;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Tareas
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
     * Set estado
     *
     * @param string $estado
     *
     * @return Tareas
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
}

