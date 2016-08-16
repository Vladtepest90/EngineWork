<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Inducciones
 *
 * @ORM\Table(name="inducciones")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\InduccionesRepository")
 */
class Inducciones
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
     * @ORM\Column(name="IdTipoPase", type="integer")
     */
    private $idTipoPase;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;
    
    /**
     * @ManyToOne(targetEntity="TipoPase", inversedBy="induccion")
     * @JoinColumn(name="tipopase_id",referencedColumnName="id")
     */
    
    
    private $tipopaseind;
    /**
     * @OneToMany(targetEntity="EmpPrincipalInd", mappedBy="idInduccion")
     * 
     */
    
	private $induccion;
	
	public function __construct(){
		$this->induccion = new ArrayCollection();
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
     * Set idTipoPase
     *
     * @param integer $idTipoPase
     * @return Inducciones
     */
    public function setIdTipoPase($idTipoPase)
    {
        $this->idTipoPase = $idTipoPase;

        return $this;
    }

    /**
     * Get idTipoPase
     *
     * @return integer 
     */
    public function getIdTipoPase()
    {
        return $this->idTipoPase;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Inducciones
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
     * @return Inducciones
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
     * @param \DateTime $fechaIngreso
     * @return Inducciones
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
     * @return Inducciones
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
     * Set tipopaseind
     *
     * @param \FirstEngineBundle\Entity\TipoPase $tipopaseind
     * @return Inducciones
     */
    public function setTipopaseind(\FirstEngineBundle\Entity\TipoPase $tipopaseind = null)
    {
        $this->tipopaseind = $tipopaseind;

        return $this;
    }

    /**
     * Get tipopaseind
     *
     * @return \FirstEngineBundle\Entity\TipoPase 
     */
    public function getTipopaseind()
    {
        return $this->tipopaseind;
    }

    /**
     * Add induccion
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalInd $induccion
     * @return Inducciones
     */
    public function addInduccion(\FirstEngineBundle\Entity\EmpPrincipalInd $induccion)
    {
        $this->induccion[] = $induccion;

        return $this;
    }

    /**
     * Remove induccion
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalInd $induccion
     */
    public function removeInduccion(\FirstEngineBundle\Entity\EmpPrincipalInd $induccion)
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
}
