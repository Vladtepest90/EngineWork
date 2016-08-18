<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * RegistroPasesTrabajadores
 *
 * @ORM\Table(name="registro_pases_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroPasesTrabajadoresRepository")
 */
class RegistroPasesTrabajadores
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
     * @ManyToOne(targetEntity="DetalleContratoTrabajador", inversedBy="regpasestrabdet")
     * @JoinColumn(name="DetalleContratoTrabajador_id", referencedColumnName="id")
     * 
     */
    private $DetalleContratoTrabajador;

    /**
     * @ManyToOne(targetEntity="EmpPrincipalInd", inversedBy="regpasestrabind")
     * @JoinColumn(name="EmpPrincipalInd_id", referencedColumnName="id")
     * 
     */
    private $EmpPrincipalInd;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoPase", type="string", length=255)
     */
    private $codigoPase;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=255)
     */
    private $nombreArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCreacioin", type="datetime")
     */
    private $fechaCreacioin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaEmision", type="datetime")
     */
    private $fechaEmision;

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
     * @OneToMany(targetEntity="AcreditacionTrabajadores", mappedBy="RegistroPasesTrabajador")
     *  
     */
    
    private $acredtrabreg;

    	
   
    
    public function __construct(){
    	
    	$this->acredtrabreg = new ArrayCollection();
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
     * Set codigoPase
     *
     * @param string $codigoPase
     * @return RegistroPasesTrabajadores
     */
    public function setCodigoPase($codigoPase)
    {
        $this->codigoPase = $codigoPase;

        return $this;
    }

    /**
     * Get codigoPase
     *
     * @return string 
     */
    public function getCodigoPase()
    {
        return $this->codigoPase;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return RegistroPasesTrabajadores
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
     * Set fechaCreacioin
     *
     * @param \DateTime $fechaCreacioin
     * @return RegistroPasesTrabajadores
     */
    public function setFechaCreacioin($fechaCreacioin)
    {
        $this->fechaCreacioin = $fechaCreacioin;

        return $this;
    }

    /**
     * Get fechaCreacioin
     *
     * @return \DateTime 
     */
    public function getFechaCreacioin()
    {
        return $this->fechaCreacioin;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return RegistroPasesTrabajadores
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

    /**
     * Get fechaEmision
     *
     * @return \DateTime 
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return RegistroPasesTrabajadores
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
     * @return RegistroPasesTrabajadores
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
     * Add acredtrabreg
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabreg
     * @return RegistroPasesTrabajadores
     */
    public function addAcredtrabreg(\FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabreg)
    {
        $this->acredtrabreg[] = $acredtrabreg;

        return $this;
    }

    /**
     * Remove acredtrabreg
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabreg
     */
    public function removeAcredtrabreg(\FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabreg)
    {
        $this->acredtrabreg->removeElement($acredtrabreg);
    }

    /**
     * Get acredtrabreg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcredtrabreg()
    {
        return $this->acredtrabreg;
    }

    /**
     * Set DetalleContratoTrabajador
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detalleContratoTrabajador
     * @return RegistroPasesTrabajadores
     */
    public function setDetalleContratoTrabajador(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detalleContratoTrabajador = null)
    {
        $this->DetalleContratoTrabajador = $detalleContratoTrabajador;

        return $this;
    }

    /**
     * Get DetalleContratoTrabajador
     *
     * @return \FirstEngineBundle\Entity\DetalleContratoTrabajador 
     */
    public function getDetalleContratoTrabajador()
    {
        return $this->DetalleContratoTrabajador;
    }

    /**
     * Set EmpPrincipalInd
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalInd $empPrincipalInd
     * @return RegistroPasesTrabajadores
     */
    public function setEmpPrincipalInd(\FirstEngineBundle\Entity\EmpPrincipalInd $empPrincipalInd = null)
    {
        $this->EmpPrincipalInd = $empPrincipalInd;

        return $this;
    }

    /**
     * Get EmpPrincipalInd
     *
     * @return \FirstEngineBundle\Entity\EmpPrincipalInd 
     */
    public function getEmpPrincipalInd()
    {
        return $this->EmpPrincipalInd;
    }
}
