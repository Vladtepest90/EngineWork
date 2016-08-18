<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EmpPrincipalInd
 *
 * @ORM\Table(name="emp_principal_ind")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpPrincipalIndRepository")
 */
class EmpPrincipalInd
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
     * @ManyToOne(targetEntity="inducciones", inversedBy="induccion")
     * @JoinColumn(name="idInduccion", referencedColumnName="id")
     *
     */
    private $idInduccion;

    /**
     * @ManyToOne(targetEntity="EmpresaPrincipal",inversedBy="inducciones");
     * @JoinColumn(name="EmpresaPrincipal_id",referencedColumnName="id")
     */
    private $EmpresaPrincipal;
    
    /**
     * @OneToMany(targetEntity="RegistroPasesTrabajadores", mappedBy="EmpPrincipalInd")
     * 
     */
    
    private $regpasestrabind;
	
    public function __construct(){
    	$this->regpasestrabind = new ArrayCollection();
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
     * Set idInduccion
     *
     * @param integer $idInduccion
     * @return EmpPrincipalInd
     */
    public function setIdInduccion($idInduccion)
    {
        $this->idInduccion = $idInduccion;

        return $this;
    }

    /**
     * Get idInduccion
     *
     * @return integer 
     */
    public function getIdInduccion()
    {
        return $this->idInduccion;
    }

    /**
     * Set idEmpresaPrincipal
     *
     * @param integer $idEmpresaPrincipal
     * @return EmpPrincipalInd
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
     * Set EmpresaPrincipal
     *
     * @param \FirstEngineBundle\Entity\EmpresaPrincipal $empresaPrincipal
     * @return EmpPrincipalInd
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
     * Add regpasestrabind
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabind
     * @return EmpPrincipalInd
     */
    public function addRegpasestrabind(\FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabind)
    {
        $this->regpasestrabind[] = $regpasestrabind;

        return $this;
    }

    /**
     * Remove regpasestrabind
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabind
     */
    public function removeRegpasestrabind(\FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabind)
    {
        $this->regpasestrabind->removeElement($regpasestrabind);
    }

    /**
     * Get regpasestrabind
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegpasestrabind()
    {
        return $this->regpasestrabind;
    }
}
