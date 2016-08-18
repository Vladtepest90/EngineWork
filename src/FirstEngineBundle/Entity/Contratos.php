<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Contratos
 *
 * @ORM\Table(name="contratos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\ContratosRepository")
 */
class Contratos
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @ManyToOne(targetEntity="EmpresaPrincipal", inversedBy="contratos")
     * @JoinColumn(name="idEmpresaPrincipal_id", referencedColumnName="id")
     */
    private $idEmpresaPrincipal;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaBloqueo", type="datetime", nullable=true)
     */
    private $fechaBloqueo;

    /**
     * @OneToMany(targetEntity="ServiciosContratados", mappedBy="idContrato")
     */
    private $requerimientoservicio;

    public function __construct(){
    	$this->requerimientoservicio = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Contratos
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
     * Set codigo
     *
     * @param string $codigo
     * @return Contratos
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
     * Set idEmpresaPrincipal
     *
     * @param integer $idEmpresaPrincipal
     * @return Contratos
     */
    public function setIdEmpresaPrincipal($idEmpresaPrincipal)
    {
        $this->idEmpresaPrincipal = $idEmpresaPrincipal;

        return $this;
    }

    /**
     * Get idEmpresaPrincipal
     *
     * @return integer 
     */
    public function getIdEmpresaPrincipal()
    {
        return $this->idEmpresaPrincipal;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Contratos
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
     * @return Contratos
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
     * Set fechaBloqueo
     *
     * @param \DateTime $fechaBloqueo
     * @return Contratos
     */
    public function setFechaBloqueo($fechaBloqueo)
    {
        $this->fechaBloqueo = $fechaBloqueo;

        return $this;
    }

    /**
     * Get fechaBloqueo
     *
     * @return \DateTime 
     */
    public function getFechaBloqueo()
    {
        return $this->fechaBloqueo;
    }

    /**
     * Add requerimientoservicio
     *
     * @param \FirstEngineBundle\Entity\ServiciosContratados $requerimientoservicio
     * @return Contratos
     */
    public function addRequerimientoservicio(\FirstEngineBundle\Entity\ServiciosContratados $requerimientoservicio)
    {
        $this->requerimientoservicio[] = $requerimientoservicio;

        return $this;
    }

    /**
     * Remove requerimientoservicio
     *
     * @param \FirstEngineBundle\Entity\ServiciosContratados $requerimientoservicio
     */
    public function removeRequerimientoservicio(\FirstEngineBundle\Entity\ServiciosContratados $requerimientoservicio)
    {
        $this->requerimientoservicio->removeElement($requerimientoservicio);
    }

    /**
     * Get requerimientoservicio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRequerimientoservicio()
    {
        return $this->requerimientoservicio;
    }
}
