<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * RegistroPasesVehiculos
 *
 * @ORM\Table(name="registro_pases_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroPasesVehiculosRepository")
 */
class RegistroPasesVehiculos
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
     * @ManyToOne(targetEntity="Vehiculos", inversedBy="regpasesvehs")
     * @JoinColumn(name="RegistroVehiculo_id", referencedColumnName="id")
     * 
     */
    private $RegistroVehiculo;

    /**
     * @ManyToOne(targetEntity="EmpPrincipalIns", inversedBy="regpasesvehsemp")
     * @JoinColumn(name="EmpPrincipalIns_id", referencedColumnName="id")
     *
     */
    private $EmpPrincipalIns;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoPase", type="string", length=255, unique=true)
     */
    private $codigoPase;

    /**
     * @var string
     *
     * @ORM\Column(name="NombreArchivo", type="string", length=255, nullable=true)
     */
    private $nombreArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCrecion", type="datetime")
     */
    private $fechaCrecion;

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
     * @ORM\Column(name="FechaActualizar", type="date")
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="AcreditacionVehiculos", mappedBy="RegistroPasesVehiculos")
     * 
     */
    
    private $acredvehsreg;
    
    public function __construct(){
    	
    	$this->acredvehsreg = new ArrayCollection();
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
     * @return RegistroPasesVehiculos
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
     * @return RegistroPasesVehiculos
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
     * Set fechaCrecion
     *
     * @param \DateTime $fechaCrecion
     * @return RegistroPasesVehiculos
     */
    public function setFechaCrecion($fechaCrecion)
    {
        $this->fechaCrecion = $fechaCrecion;

        return $this;
    }

    /**
     * Get fechaCrecion
     *
     * @return \DateTime 
     */
    public function getFechaCrecion()
    {
        return $this->fechaCrecion;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return RegistroPasesVehiculos
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
     * @return RegistroPasesVehiculos
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
     * @return RegistroPasesVehiculos
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
     * Add acredvehsreg
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsreg
     * @return RegistroPasesVehiculos
     */
    public function addAcredvehsreg(\FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsreg)
    {
        $this->acredvehsreg[] = $acredvehsreg;

        return $this;
    }

    /**
     * Remove acredvehsreg
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsreg
     */
    public function removeAcredvehsreg(\FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsreg)
    {
        $this->acredvehsreg->removeElement($acredvehsreg);
    }

    /**
     * Get acredvehsreg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcredvehsreg()
    {
        return $this->acredvehsreg;
    }

    /**
     * Set RegistroVehiculo
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $registroVehiculo
     * @return RegistroPasesVehiculos
     */
    public function setRegistroVehiculo(\FirstEngineBundle\Entity\Vehiculos $registroVehiculo = null)
    {
        $this->RegistroVehiculo = $registroVehiculo;

        return $this;
    }

    /**
     * Get RegistroVehiculo
     *
     * @return \FirstEngineBundle\Entity\Vehiculos 
     */
    public function getRegistroVehiculo()
    {
        return $this->RegistroVehiculo;
    }

    /**
     * Set EmpPrincipalIns
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalIns $empPrincipalIns
     * @return RegistroPasesVehiculos
     */
    public function setEmpPrincipalIns(\FirstEngineBundle\Entity\EmpPrincipalIns $empPrincipalIns = null)
    {
        $this->EmpPrincipalIns = $empPrincipalIns;

        return $this;
    }

    /**
     * Get EmpPrincipalIns
     *
     * @return \FirstEngineBundle\Entity\EmpPrincipalIns 
     */
    public function getEmpPrincipalIns()
    {
        return $this->EmpPrincipalIns;
    }
}
