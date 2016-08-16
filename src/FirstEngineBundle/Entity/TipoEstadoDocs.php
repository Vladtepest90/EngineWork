<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoEstadoDocs
 *
 * @ORM\Table(name="tipo_estado_docs")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TipoEstadoDocsRepository")
 */
class TipoEstadoDocs
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
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;
	
    /**
     * @OneToMany(targetEntity="EstadosDocsTrabajadores",mappedBy="TipoEstado")
     * 
     */
    
	private $estdocstrabs;
	
	/**
	 * @OneToMany(targetEntity="EstadosDocsVehiculos", mappedBy="TipoEstado")
	 * 
	 */
	
	private $estdocsvehs;
	
	public function __construct(){
		$this->estdocstrabs = new ArrayCollection();
		$this->estdocsvehs = new ArrayCollection();
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return TipoEstadoDocs
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
     * @return TipoEstadoDocs
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoEstadoDocs
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
     * Add estdocstrabs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrabs
     * @return TipoEstadoDocs
     */
    public function addEstdocstrab(\FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrabs)
    {
        $this->estdocstrabs[] = $estdocstrabs;

        return $this;
    }

    /**
     * Remove estdocstrabs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrabs
     */
    public function removeEstdocstrab(\FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrabs)
    {
        $this->estdocstrabs->removeElement($estdocstrabs);
    }

    /**
     * Get estdocstrabs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstdocstrabs()
    {
        return $this->estdocstrabs;
    }

    /**
     * Add estdocsvehs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocsvehs
     * @return TipoEstadoDocs
     */
    public function addEstdocsveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocsvehs)
    {
        $this->estdocsvehs[] = $estdocsvehs;

        return $this;
    }

    /**
     * Remove estdocsvehs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocsvehs
     */
    public function removeEstdocsveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocsvehs)
    {
        $this->estdocsvehs->removeElement($estdocsvehs);
    }

    /**
     * Get estdocsvehs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstdocsvehs()
    {
        return $this->estdocsvehs;
    }
}
