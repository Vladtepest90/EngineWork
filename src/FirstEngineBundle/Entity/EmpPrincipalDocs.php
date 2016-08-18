<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EmpPrincipalDocs
 *
 * @ORM\Table(name="emp_principal_docs")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpPrincipalDocsRepository")
 */
class EmpPrincipalDocs
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
     * @var int
     *
     * @ORM\Column(name="IdDocumento", type="integer")
     */
    private $idDocumento;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEmpresaPrincipal", type="integer")
     */
    private $idEmpresaPrincipal;
    
    /**
     * @OneToMany(targetEntity="RegistroDocsTrabajador", mappedBy="EmpPrincipalDocs")
     * 
     */
    
    private $regdocstrab;
    
    /**
     * @OneToMany(targetEntity="RegistroDocsVehiculos", mappedBy="EmpPrincipalDocs")
     *
     */
    
    private $regdocsvehs;

	public function __construct(){
		$this->regdocstrab = new ArrayCollection();
		$this->regdocsvehs = new ArrayCollection();
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
     * Set idDocumento
     *
     * @param integer $idDocumento
     * @return EmpPrincipalDocs
     */
    public function setIdDocumento($idDocumento)
    {
        $this->idDocumento = $idDocumento;

        return $this;
    }

    /**
     * Get idDocumento
     *
     * @return integer 
     */
    public function getIdDocumento()
    {
        return $this->idDocumento;
    }

    /**
     * Set idEmpresaPrincipal
     *
     * @param integer $idEmpresaPrincipal
     * @return EmpPrincipalDocs
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
     * Add regdocstrab
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab
     * @return EmpPrincipalDocs
     */
    public function addRegdocstrab(\FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab)
    {
        $this->regdocstrab[] = $regdocstrab;

        return $this;
    }

    /**
     * Remove regdocstrab
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab
     */
    public function removeRegdocstrab(\FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab)
    {
        $this->regdocstrab->removeElement($regdocstrab);
    }

    /**
     * Get regdocstrab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegdocstrab()
    {
        return $this->regdocstrab;
    }

    /**
     * Add regdocsvehs
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsVehiculos $regdocsvehs
     * @return EmpPrincipalDocs
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
}
