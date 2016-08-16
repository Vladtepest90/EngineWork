<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EmpPrincipalIns
 *
 * @ORM\Table(name="emp_principal_ins")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpPrincipalInsRepository")
 */
class EmpPrincipalIns
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
     * @ManyToOne(targetEntity="EmpresaPrincipal",inversedBy="empprinrev")
     * @JoinColumn(name="EmpresaPrincipal_id", referencedColumnName="id")
     */
    private $EmpresaPrincipal;

    /**
     * @ManyToOne(targetEntity="InspeccionVehiculo", inversedBy="insempprinc")
     * @JoinColumn(name="InspeccionVehiculo_id",referencedColumnName="id")
     */
    private $InspeccionVehiculo;

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
     * @OneToMany(targetEntity="RegistroPasesVehiculos", mappedBy="EmpPrincipalIns")
     * 
     */
    
    private $regpasesvehsemp;
    
    public function __construct(){
    	
    	$this->regpasesvehsemp = new ArrayCollection();
    	
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
     * @return EmpPrincipalIns
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
     * @return EmpPrincipalIns
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
     * Set EmpresaPrincipal
     *
     * @param \FirstEngineBundle\Entity\EmpresaPrincipal $empresaPrincipal
     * @return EmpPrincipalIns
     */
    public function setEmpresaPrincipal(\FirstEngineBundle\Entity\EmpresaPrincipal $empresaPrincipal = null)
    {
        $this->EmpresaPrincipal = $empresaPrincipal;

        return $this;
    }

    /**
     * Get EmpresaPrincipal
     *
     * @return \FirstEngineBundle\Entity\EmpresaPrincipal 
     */
    public function getEmpresaPrincipal()
    {
        return $this->EmpresaPrincipal;
    }

    /**
     * Set InspeccionVehiculo
     *
     * @param \FirstEngineBundle\Entity\InspeccionVehiculo $inspeccionVehiculo
     * @return EmpPrincipalIns
     */
    public function setInspeccionVehiculo(\FirstEngineBundle\Entity\InspeccionVehiculo $inspeccionVehiculo = null)
    {
        $this->InspeccionVehiculo = $inspeccionVehiculo;

        return $this;
    }

    /**
     * Get InspeccionVehiculo
     *
     * @return \FirstEngineBundle\Entity\InspeccionVehiculo 
     */
    public function getInspeccionVehiculo()
    {
        return $this->InspeccionVehiculo;
    }

    /**
     * Add regpasesvehsemp
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehsemp
     * @return EmpPrincipalIns
     */
    public function addRegpasesvehsemp(\FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehsemp)
    {
        $this->regpasesvehsemp[] = $regpasesvehsemp;

        return $this;
    }

    /**
     * Remove regpasesvehsemp
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehsemp
     */
    public function removeRegpasesvehsemp(\FirstEngineBundle\Entity\RegistroPasesVehiculos $regpasesvehsemp)
    {
        $this->regpasesvehsemp->removeElement($regpasesvehsemp);
    }

    /**
     * Get regpasesvehsemp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegpasesvehsemp()
    {
        return $this->regpasesvehsemp;
    }
}
