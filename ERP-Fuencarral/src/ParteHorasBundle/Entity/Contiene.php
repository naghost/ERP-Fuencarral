<?php

namespace ParteHorasBundle\Entity;

/**
 * Contiene
 */
class Contiene
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ParteHorasBundle\Entity\Permisosacceso
     */
    private $idauxpermiso;

    /**
     * @var \ParteHorasBundle\Entity\Modulo
     */
    private $idauxmodulo;


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
     * Set idauxpermiso
     *
     * @param \ParteHorasBundle\Entity\Permisosacceso $idauxpermiso
     *
     * @return Contiene
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

    /**
     * Set idauxmodulo
     *
     * @param \ParteHorasBundle\Entity\Modulo $idauxmodulo
     *
     * @return Contiene
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

