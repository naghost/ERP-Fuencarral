<?php

namespace ParteHorasBundle\Entity;

/**
 * Desglosado
 */
class Desglosado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ParteHorasBundle\Entity\Ordenfabricacion
     */
    private $idordenaux;

    /**
     * @var \ParteHorasBundle\Entity\Tareas
     */
    private $idtareaaux;


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
     * Set idordenaux
     *
     * @param \ParteHorasBundle\Entity\Ordenfabricacion $idordenaux
     *
     * @return Desglosado
     */
    public function setIdordenaux(\ParteHorasBundle\Entity\Ordenfabricacion $idordenaux = null)
    {
        $this->idordenaux = $idordenaux;

        return $this;
    }

    /**
     * Get idordenaux
     *
     * @return \ParteHorasBundle\Entity\Ordenfabricacion
     */
    public function getIdordenaux()
    {
        return $this->idordenaux;
    }

    /**
     * Set idtareaaux
     *
     * @param \ParteHorasBundle\Entity\Tareas $idtareaaux
     *
     * @return Desglosado
     */
    public function setIdtareaaux(\ParteHorasBundle\Entity\Tareas $idtareaaux = null)
    {
        $this->idtareaaux = $idtareaaux;

        return $this;
    }

    /**
     * Get idtareaaux
     *
     * @return \ParteHorasBundle\Entity\Tareas
     */
    public function getIdtareaaux()
    {
        return $this->idtareaaux;
    }
}

