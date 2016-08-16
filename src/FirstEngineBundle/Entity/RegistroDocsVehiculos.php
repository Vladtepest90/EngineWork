<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * RegistroDocsVehiculos
 *
 * @ORM\Table(name="registro_docs_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroDocsVehiculosRepository")
 */
class RegistroDocsVehiculos
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
     * @ManyToOne(targetEntity="EmpPrincipalDocs", inversedBy="regdocsvehs")
     * @JoinColumn(name="EmpPrincipalDocs_id", referencedColumnName="id")
     * 
     */
    private $EmpPrincipalDocs;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSubcontratacionEmpresas", type="integer")
     */
    private $idSubcontratacionEmpresas;

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
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencimiento", type="datetime")
     */
    private $fechaVencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=255)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentarios", type="string", length=255, nullable=true)
     */
    private $comentarios;
    
    /**
     * @ManyToOne(targetEntity="Vehiculos", inversedBy="regdocsvehs")
     * @JoinColumn(name="Vehiculos_id", referencedColumnName="id")
     */
    
    private $Vehiculos;
    
    /**
     * @OneToMany(targetEntity="EstadosDocsVehiculos", mappedBy="RegistroDocsVehiculos")
     * 
     */
    
    private $estdocveh;
    
    public function __construct(){
    	
    	$this->estdocveh = new ArrayCollection();
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
     * Set idSubcontratacionEmpresas
     *
     * @param integer $idSubcontratacionEmpresas
     * @return RegistroDocsVehiculos
     */
    public function setIdSubcontratacionEmpresas($idSubcontratacionEmpresas)
    {
        $this->idSubcontratacionEmpresas = $idSubcontratacionEmpresas;

        return $this;
    }

    /**
     * Get idSubcontratacionEmpresas
     *
     * @return integer 
     */
    public function getIdSubcontratacionEmpresas()
    {
        return $this->idSubcontratacionEmpresas;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return RegistroDocsVehiculos
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
     * @return RegistroDocsVehiculos
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
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return RegistroDocsVehiculos
     */
    public function setFechaVencimiento($fechaVencimiento)
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }

    /**
     * Get fechaVencimiento
     *
     * @return \DateTime 
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return RegistroDocsVehiculos
     */
    public function setNombreArchivo($nombreArchivo)
    {
        $this->nombreArchivo = $nombreArchivo;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string 
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return RegistroDocsVehiculos
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set EmpPrincipalDocs
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalDocs $empPrincipalDocs
     * @return RegistroDocsVehiculos
     */
    public function setEmpPrincipalDocs(\FirstEngineBundle\Entity\EmpPrincipalDocs $empPrincipalDocs = null)
    {
        $this->EmpPrincipalDocs = $empPrincipalDocs;

        return $this;
    }

    /**
     * Get EmpPrincipalDocs
     *
     * @return \FirstEngineBundle\Entity\EmpPrincipalDocs 
     */
    public function getEmpPrincipalDocs()
    {
        return $this->EmpPrincipalDocs;
    }

    /**
     * Set Vehiculos
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $vehiculos
     * @return RegistroDocsVehiculos
     */
    public function setVehiculos(\FirstEngineBundle\Entity\Vehiculos $vehiculos = null)
    {
        $this->Vehiculos = $vehiculos;

        return $this;
    }

    /**
     * Get Vehiculos
     *
     * @return \FirstEngineBundle\Entity\Vehiculos 
     */
    public function getVehiculos()
    {
        return $this->Vehiculos;
    }

    /**
     * Add estdocveh
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocveh
     * @return RegistroDocsVehiculos
     */
    public function addEstdocveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocveh)
    {
        $this->estdocveh[] = $estdocveh;

        return $this;
    }

    /**
     * Remove estdocveh
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocveh
     */
    public function removeEstdocveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocveh)
    {
        $this->estdocveh->removeElement($estdocveh);
    }

    /**
     * Get estdocveh
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstdocveh()
    {
        return $this->estdocveh;
    }
}
