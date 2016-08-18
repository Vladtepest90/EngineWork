<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ServiciosContratados
 *
 * @ORM\Table(name="servicios_contratados")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\ServiciosContratadosRepository")
 */
class ServiciosContratados
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
     * @ManyToOne(targetEntity="Areas", inversedBy="requerimientoservicio")
     * @JoinColumn(name="idArea_id", referencedColumnName="id")
     */
    private $idArea;

    /**
     * @ManyToOne(targetEntity="Contratos", inversedBy="requerimientoservicio")
     * @JoinColumn(name="idContrato_id", referencedColumnName="id")
     */
    private $idContrato;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUsuarioEmpPrincipal", type="integer")
     */
    private $idUsuarioEmpPrincipal;
    
    
    /**
     * @OneToMany(targetEntity="SubcontratacionEmpresas", mappedBy="idServiciosContratados")
     * 
     */
    private $subcontrataciones;
    
    /**
     * @OneToMany(targetEntity="PasesTrabajadores", mappedBy="ServiciosContratados")
     * 
     */
    private $pasestrabserv;
    
    /**
     * @OneToMany(targetEntity="FuncionariosUEP", mappedBy="idservcontrab")
     * 
     */
    
    private $funcionariosUEP;
    
    public function __construct(){
    	$this->subcontrataciones = new ArrayCollection();
    	$this->pasestrabserv = new ArrayCollection();
    	$this->funcionariosUEP = new ArrayCollection();
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
     * Set idArea
     *
     * @param integer $idArea
     * @return ServiciosContratados
     */
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;

        return $this;
    }

    /**
     * Get idArea
     *
     * @return integer 
     */
    public function getIdArea()
    {
        return $this->idArea;
    }

    /**
     * Set idContrato
     *
     * @param integer $idContrato
     * @return ServiciosContratados
     */
    public function setIdContrato($idContrato)
    {
        $this->idContrato = $idContrato;

        return $this;
    }

    /**
     * Get idContrato
     *
     * @return integer 
     */
    public function getIdContrato()
    {
        return $this->idContrato;
    }

    /**
     * Set idUsuarioEmpPrincipal
     *
     * @param integer $idUsuarioEmpPrincipal
     * @return ServiciosContratados
     */
    public function setIdUsuarioEmpPrincipal($idUsuarioEmpPrincipal)
    {
        $this->idUsuarioEmpPrincipal = $idUsuarioEmpPrincipal;

        return $this;
    }

    /**
     * Get idUsuarioEmpPrincipal
     *
     * @return integer 
     */
    public function getIdUsuarioEmpPrincipal()
    {
        return $this->idUsuarioEmpPrincipal;
    }

    /**
     * Add subcontrataciones
     *
     * @param \FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontrataciones
     * @return ServiciosContratados
     */
    public function addSubcontratacione(\FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontrataciones)
    {
        $this->subcontrataciones[] = $subcontrataciones;

        return $this;
    }

    /**
     * Remove subcontrataciones
     *
     * @param \FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontrataciones
     */
    public function removeSubcontratacione(\FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontrataciones)
    {
        $this->subcontrataciones->removeElement($subcontrataciones);
    }

    /**
     * Get subcontrataciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubcontrataciones()
    {
        return $this->subcontrataciones;
    }

    /**
     * Add pasestrabserv
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabserv
     * @return ServiciosContratados
     */
    public function addPasestrabserv(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabserv)
    {
        $this->pasestrabserv[] = $pasestrabserv;

        return $this;
    }

    /**
     * Remove pasestrabserv
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabserv
     */
    public function removePasestrabserv(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabserv)
    {
        $this->pasestrabserv->removeElement($pasestrabserv);
    }

    /**
     * Get pasestrabserv
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPasestrabserv()
    {
        return $this->pasestrabserv;
    }

    /**
     * Add funcionariosUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionariosUEP
     * @return ServiciosContratados
     */
    public function addFuncionariosUEP(\FirstEngineBundle\Entity\FuncionariosUEP $funcionariosUEP)
    {
        $this->funcionariosUEP[] = $funcionariosUEP;

        return $this;
    }

    /**
     * Remove funcionariosUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionariosUEP
     */
    public function removeFuncionariosUEP(\FirstEngineBundle\Entity\FuncionariosUEP $funcionariosUEP)
    {
        $this->funcionariosUEP->removeElement($funcionariosUEP);
    }

    /**
     * Get funcionariosUEP
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFuncionariosUEP()
    {
        return $this->funcionariosUEP;
    }
}
