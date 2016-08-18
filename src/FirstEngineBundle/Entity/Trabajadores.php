<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Trabajadores
 *
 * @ORM\Table(name="trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TrabajadoresRepository")
 */
class Trabajadores
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="IdPersona", type="integer")
     */
    private $idPersona;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime")
     */
    private $fechaActualizar;

    /**
     * @OneToOne(targetEntity="Personas", inversedBy="trabajador")
     */
    private $persona;
    
    /**
     * @OneToMany(targetEntity="DetalleContratoTrabajador", mappedBy="Trabajador")
     * 
     */
    
    private $detcontrabtrab;
    
    public function __construct(){
    	
    	$this->detcontrabtrab = new ArrayCollection();
    	
    }
    
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
     * Set idPersona
     *
     * @param integer $idPersona
     * @return Trabajadores
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return integer 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Trabajadores
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return Trabajadores
     */
    public function setFechaActualizar($fechaActualizar)
    {
        $this->fechaActualizar = $fechaActualizar;

        return $this;
    }

    /**
     * Get fechaActualizar
     *
     * @return \DateTime 
     */
    public function getFechaActualizar()
    {
        return $this->fechaActualizar;
    }

    /**
     * Set persona
     *
     * @param \FirstEngineBundle\Entity\Personas $persona
     * @return Trabajadores
     */
    public function setPersona(\FirstEngineBundle\Entity\Personas $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \FirstEngineBundle\Entity\Personas 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add detcontrabtrab
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detcontrabtrab
     * @return Trabajadores
     */
    public function addDetcontrabtrab(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detcontrabtrab)
    {
        $this->detcontrabtrab[] = $detcontrabtrab;

        return $this;
    }

    /**
     * Remove detcontrabtrab
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detcontrabtrab
     */
    public function removeDetcontrabtrab(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detcontrabtrab)
    {
        $this->detcontrabtrab->removeElement($detcontrabtrab);
    }

    /**
     * Get detcontrabtrab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetcontrabtrab()
    {
        return $this->detcontrabtrab;
    }
}
