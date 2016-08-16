<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\VehiculosRepository")
 */
class Vehiculos
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
     * @ManyToOne(targetEntity="SubcontratacionEmpresas", inversedBy="vehicsub")
     * @JoinColumn(name="subcontratacion_id", referencedColumnName="id")
     * 
     */
    private $subcontratacion;

    /**
     * @ManyToOne(targetEntity="TipoVehiculo", inversedBy="vehiculo")
     * @JoinColumn(name="tipoVehiculo", referencedColumnName="id")
     * 
     */
    private $tipoVehiculo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fingreso", type="datetime")
     */
    private $fingreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="factualizar", type="datetime")
     */
    private $factualizar;

    /**
     * @var string
     *
     * @ORM\Column(name="patente", type="string", length=100)
     */
    private $patente;
    
    /**
     * @OneToMany(targetEntity="RegistroDocsVehiculos", mappedBy="Vehiculos")
     * 
     */
    
    private $regdocsvehs;
    
    /**
     * @OneToMany(targetEntity="RegistroPasesVehiculos", mappedBy="RegistroVehiculo")
     * 
     */
    
    private $regpasesvehs;
    
    public function __construct(){
    	
    	$this->regdocsvehs = new ArrayCollection();
    	$this->regpasesvehs = new ArrayCollection();
    	
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
     * Set fingreso
     *
     * @param \DateTime $fingreso
     * @return Vehiculos
     */
    public function setFingreso($fingreso)
    {
        $this->fingreso = $fingreso;

        return $this;
    }

    /**
     * Get fingreso
     *
     * @return \DateTime 
     */
    public function getFingreso()
    {
        return $this->fingreso;
    }

    /**
     * Set factualizar
     *
     * @param \DateTime $factualizar
     * @return Vehiculos
     */
    public function setFactualizar($factualizar)
    {
        $this->factualizar = $factualizar;

        return $this;
    }

    /**
     * Get factualizar
     *
     * @return \DateTime 
     */
    public function getFactualizar()
    {
        return $this->factualizar;
    }

    /**
     * Set patente
     *
     * @param string $patente
     * @return Vehiculos
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string 
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Add regdocsvehs
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsVehiculos $regdocsvehs
     * @return Vehiculos
     */
    public function addRegdocsveh(\FirstEngineBundle\Entity\RegistroDocsVehiculos $regdocsvehs)
    {
        $this->regdocsvehs[] = $regdocsvehs;

        return $this;
    }

    /**
     * Remove regdocsvehs
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsVehiculos $regdocsvehs
     */
    public function removeRegdocsveh(\FirstEngineBundle\Entity\RegistroDocsVehiculos $regdocsvehs)
    {
        $this->regdocsvehs->removeElement($regdocsvehs);
    }

    /**
     * Get regdocsvehs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegdocsvehs()
    {
        return $this->regdocsvehs;
    }

    /**
     * Add regpasesvehs
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehs
     * @return Vehiculos
     */
    public function addRegpasesveh(\FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehs)
    {
        $this->regpasesvehs[] = $regpasesvehs;

        return $this;
    }

    /**
     * Remove regpasesvehs
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehs
     */
    public function removeRegpasesveh(\FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehs)
    {
        $this->regpasesvehs->removeElement($regpasesvehs);
    }

    /**
     * Get regpasesvehs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegpasesvehs()
    {
        return $this->regpasesvehs;
    }

    /**
     * Set subcontratacion
     *
     * @param \FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontratacion
     * @return Vehiculos
     */
    public function setSubcontratacion(\FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontratacion = null)
    {
        $this->subcontratacion = $subcontratacion;

        return $this;
    }

    /**
     * Get subcontratacion
     *
     * @return \FirstEngineBundle\Entity\SubcontratacionEmpresas 
     */
    public function getSubcontratacion()
    {
        return $this->subcontratacion;
    }

    /**
     * Set tipoVehiculo
     *
     * @param \FirstEngineBundle\Entity\TipoVehiculo $tipoVehiculo
     * @return Vehiculos
     */
    public function setTipoVehiculo(\FirstEngineBundle\Entity\TipoVehiculo $tipoVehiculo = null)
    {
        $this->tipoVehiculo = $tipoVehiculo;

        return $this;
    }

    /**
     * Get tipoVehiculo
     *
     * @return \FirstEngineBundle\Entity\TipoVehiculo 
     */
    public function getTipoVehiculo()
    {
        return $this->tipoVehiculo;
    }
}
