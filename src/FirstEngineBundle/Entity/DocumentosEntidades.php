<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;


/**
 * DocumentosEntidades
 *
 * @ORM\Table(name="documentos_entidades")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\DocumentosEntidadesRepository")
 */
class DocumentosEntidades
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
     * @ORM\Column(name="Codigo", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="FechaIngreso", type="datetime", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="Documentos", mappedBy="DocumentoEntidad")
     * 
     */
    
    private $documento;
    
    public function __construct(){
    	$this->documento=new ArrayCollection();
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
     * @return DocumentosEntidades
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
     * @return DocumentosEntidades
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
     * @return DocumentosEntidades
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
     * @return DocumentosEntidades
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
     * Add documento
     *
     * @param \FirstEngineBundle\Entity\Documentos $documento
     * @return DocumentosEntidades
     */
    public function addDocumento(\FirstEngineBundle\Entity\Documentos $documento)
    {
        $this->documento[] = $documento;

        return $this;
    }

    /**
     * Remove documento
     *
     * @param \FirstEngineBundle\Entity\Documentos $documento
     */
    public function removeDocumento(\FirstEngineBundle\Entity\Documentos $documento)
    {
        $this->documento->removeElement($documento);
    }

    /**
     * Get documento
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocumento()
    {
        return $this->documento;
    }
}
