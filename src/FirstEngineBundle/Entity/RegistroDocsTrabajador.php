<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * RegistroDocsTrabajador
 *
 * @ORM\Table(name="registro_docs_trabajador")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroDocsTrabajadorRepository")
 */
class RegistroDocsTrabajador
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
     * @ManyToOne(targetEntity="EmpPrincipalDocs", inversedBy="regdocstrab")
     * @JoinColumn(name="EmpPrincipalDocs_RegDt_id",referencedColumnName="id")
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
     * @ORM\Column(name="FechaVencimiento", type="date")
     */
    private $fechaVencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=255)
     */
    private $nombreArchivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentario", type="string", length=255, nullable=true)
     */
    private $comentario;
	
    /**
     * @ManyToOne(targetEntity="TipoPase", inversedBy="regdocstrab")
     * @JoinColumn(name="tipopase_id", referencedColumnName="id")
     * 
     */
    
    private $tipopaserdt;
    
    /**
     * @ManyToOne(targetEntity="DetalleContratoTrabajador", inversedBy="regdocstrab")
     * @JoinColumn(name="detalleconttrab_id",referencedColumnName="id")
     */
    
    private $detconttrab;
    
    /**
     * @OneToMany(targetEntity="EstadosDocsTrabajadores", mappedBy="RegistroDocsTrabajador")
     * 
     */
    
    private $estdoctrab;
   
    public function __construct(){
    	
    	$this->estdoctrab = new ArrayCollection();
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
     * @return RegistroDocsTrabajador
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
     * @return RegistroDocsTrabajador
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
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return RegistroDocsTrabajador
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
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return RegistroDocsTrabajador
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
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return RegistroDocsTrabajador
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
     * Set comentario
     *
     * @param string $comentario
     * @return RegistroDocsTrabajador
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string 
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set tipopaserdt
     *
     * @param \FirstEngineBundle\Entity\TipoPase $tipopaserdt
     * @return RegistroDocsTrabajador
     */
    public function setTipopaserdt(\FirstEngineBundle\Entity\TipoPase $tipopaserdt = null)
    {
        $this->tipopaserdt = $tipopaserdt;

        return $this;
    }

    /**
     * Get tipopaserdt
     *
     * @return \FirstEngineBundle\Entity\TipoPase 
     */
    public function getTipopaserdt()
    {
        return $this->tipopaserdt;
    }

    /**
     * Set detconttrab
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrab
     * @return RegistroDocsTrabajador
     */
    public function setDetconttrab(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrab = null)
    {
        $this->detconttrab = $detconttrab;

        return $this;
    }

    /**
     * Get detconttrab
     *
     * @return \FirstEngineBundle\Entity\DetalleContratoTrabajador 
     */
    public function getDetconttrab()
    {
        return $this->detconttrab;
    }
}
