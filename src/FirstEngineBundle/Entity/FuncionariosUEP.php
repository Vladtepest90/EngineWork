<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * FuncionariosUEP
 *
 * @ORM\Table(name="funcionarios_u_e_p")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\FuncionariosUEPRepository")
 */
class FuncionariosUEP
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
     * @ManyToOne(targetEntity="Funcionarios", inversedBy="funcionarioUEP")
     * @JoinColumn(name="Funcionario_id", referencedColumnName="id")
     * 
     */
    private $Funcionario;

    /**
     * @ManyToOne(targetEntity="ServiciosContratados", inversedBy="funcionariosUEP")
     * @JoinColumn(name="ServiciosContratados_id", referencedColumnName="id")
     * 
     */
    private $idservcontrab;

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
     * @OneToMany(targetEntity="EstadosDocsTrabajadores", mappedBy="FuncionarioUEP")
     * 
     */
    
    private $estdocstrab;
    
    /**
     * @OneToMany(targetEntity="PasesTrabajadores", mappedBy="FuncionarioUEP")
     * 
     */
    
    private $pasestrabajador;
    
    /**
     * @OneToMany(targetEntity="AcreditacionTrabajadores", mappedBy="FuncionarioUEP")
     * 
     */
    
    private $acredtrabfunc;
    
    /**
     * @OneToMany(targetEntity="EstadosDocsVehiculos", mappedBy="FuncionarioUEP")
     * 
     */
    
    private $estdocvehs;
    
    /**
     * @OneToMany(targetEntity="AcreditacionVehiculos", mappedBy="FuncionarioUEP")
     * 
     */
    
    private $acredvehsfunc;

	public function __construct(){
		$this->estdocstrab = new ArrayCollection();
		$this->pasestrabajador = new ArrayCollection();
		$this->acredtrabfunc = new ArrayCollection();
		$this->estdocvehs = new ArrayCollection();
		$this->acredvehsfunc = new ArrayCollection();
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
     * @return FuncionariosUEP
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
     * @return FuncionariosUEP
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
     * Add estdocstrab
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrab
     * @return FuncionariosUEP
     */
    public function addEstdocstrab(\FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrab)
    {
        $this->estdocstrab[] = $estdocstrab;

        return $this;
    }

    /**
     * Remove estdocstrab
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrab
     */
    public function removeEstdocstrab(\FirstEngineBundle\Entity\EstadosDocsTrabajadores $estdocstrab)
    {
        $this->estdocstrab->removeElement($estdocstrab);
    }

    /**
     * Get estdocstrab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstdocstrab()
    {
        return $this->estdocstrab;
    }

    /**
     * Add pasestrabajador
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabajador
     * @return FuncionariosUEP
     */
    public function addPasestrabajador(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabajador)
    {
        $this->pasestrabajador[] = $pasestrabajador;

        return $this;
    }

    /**
     * Remove pasestrabajador
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabajador
     */
    public function removePasestrabajador(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabajador)
    {
        $this->pasestrabajador->removeElement($pasestrabajador);
    }

    /**
     * Get pasestrabajador
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPasestrabajador()
    {
        return $this->pasestrabajador;
    }

    /**
     * Add acredtrabfunc
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabfunc
     * @return FuncionariosUEP
     */
    public function addAcredtrabfunc(\FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabfunc)
    {
        $this->acredtrabfunc[] = $acredtrabfunc;

        return $this;
    }

    /**
     * Remove acredtrabfunc
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabfunc
     */
    public function removeAcredtrabfunc(\FirstEngineBundle\Entity\AcreditacionTrabajadores $acredtrabfunc)
    {
        $this->acredtrabfunc->removeElement($acredtrabfunc);
    }

    /**
     * Get acredtrabfunc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcredtrabfunc()
    {
        return $this->acredtrabfunc;
    }

    /**
     * Add estdocvehs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocvehs
     * @return FuncionariosUEP
     */
    public function addEstdocveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocvehs)
    {
        $this->estdocvehs[] = $estdocvehs;

        return $this;
    }

    /**
     * Remove estdocvehs
     *
     * @param \FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocvehs
     */
    public function removeEstdocveh(\FirstEngineBundle\Entity\EstadosDocsVehiculos $estdocvehs)
    {
        $this->estdocvehs->removeElement($estdocvehs);
    }

    /**
     * Get estdocvehs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstdocvehs()
    {
        return $this->estdocvehs;
    }

    /**
     * Add acredvehsfunc
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsfunc
     * @return FuncionariosUEP
     */
    public function addAcredvehsfunc(\FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsfunc)
    {
        $this->acredvehsfunc[] = $acredvehsfunc;

        return $this;
    }

    /**
     * Remove acredvehsfunc
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsfunc
     */
    public function removeAcredvehsfunc(\FirstEngineBundle\Entity\AcreditacionVehiculos $acredvehsfunc)
    {
        $this->acredvehsfunc->removeElement($acredvehsfunc);
    }

    /**
     * Get acredvehsfunc
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAcredvehsfunc()
    {
        return $this->acredvehsfunc;
    }

    /**
     * Set Funcionario
     *
     * @param \FirstEngineBundle\Entity\Funcionarios $funcionario
     * @return FuncionariosUEP
     */
    public function setFuncionario(\FirstEngineBundle\Entity\Funcionarios $funcionario = null)
    {
        $this->Funcionario = $funcionario;

        return $this;
    }

    /**
     * Get Funcionario
     *
     * @return \FirstEngineBundle\Entity\Funcionarios 
     */
    public function getFuncionario()
    {
        return $this->Funcionario;
    }

    /**
     * Set idservcontrab
     *
     * @param \FirstEngineBundle\Entity\ServiciosContratados $idservcontrab
     * @return FuncionariosUEP
     */
    public function setIdservcontrab(\FirstEngineBundle\Entity\ServiciosContratados $idservcontrab = null)
    {
        $this->idservcontrab = $idservcontrab;

        return $this;
    }

    /**
     * Get idservcontrab
     *
     * @return \FirstEngineBundle\Entity\ServiciosContratados 
     */
    public function getIdservcontrab()
    {
        return $this->idservcontrab;
    }
}
