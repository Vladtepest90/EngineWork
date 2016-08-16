<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoPase
 *
 * @ORM\Table(name="tipo_pase")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TipoPaseRepository")
 */
class TipoPase
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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="FechaIngreso", type="string", length=255)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="Inducciones",mappedBy="tipopaseind")
     * 
     */
    
    private $induccion;
    
    /**
     * @OneToMany(targetEntity="Documentos", mappedBy="TipoPase")
     * 
     */
    
    private $pase;
    
    /**
     * @OneToMany(targetEntity="RegistroDocsTrabajador", mappedBy="tipopaserdt")
     * 
     */
    
    private $regdocstrab;

	public function __construct(){
		$this->pase= new ArrayCollection();
		$this->regdocstrab= new ArrayCollection();
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
     * Set codigo
     *
     * @param string $codigo
     * @return TipoPase
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoPase
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
     * Set fechaIngreso
     *
     * @param string $fechaIngreso
     * @return TipoPase
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return string 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return TipoPase
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
     * Add induccion
     *
     * @param \FirstEngineBundle\Entity\Inducciones $induccion
     * @return TipoPase
     */
    public function addInduccion(\FirstEngineBundle\Entity\Inducciones $induccion)
    {
        $this->induccion[] = $induccion;

        return $this;
    }

    /**
     * Remove induccion
     *
     * @param \FirstEngineBundle\Entity\Inducciones $induccion
     */
    public function removeInduccion(\FirstEngineBundle\Entity\Inducciones $induccion)
    {
        $this->induccion->removeElement($induccion);
    }

    /**
     * Get induccion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInduccion()
    {
        return $this->induccion;
    }

    /**
     * Add pase
     *
     * @param \FirstEngineBundle\Entity\Documentos $pase
     * @return TipoPase
     */
    public function addPase(\FirstEngineBundle\Entity\Documentos $pase)
    {
        $this->pase[] = $pase;

        return $this;
    }

    /**
     * Remove pase
     *
     * @param \FirstEngineBundle\Entity\Documentos $pase
     */
    public function removePase(\FirstEngineBundle\Entity\Documentos $pase)
    {
        $this->pase->removeElement($pase);
    }

    /**
     * Get pase
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPase()
    {
        return $this->pase;
    }
}
