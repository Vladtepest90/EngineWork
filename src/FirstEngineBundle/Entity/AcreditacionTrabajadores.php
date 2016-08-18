<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * AcreditacionTrabajadores
 *
 * @ORM\Table(name="acreditacion_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\AcreditacionTrabajadoresRepository")
 */
class AcreditacionTrabajadores
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
     * @ManyToOne(targetEntity="FuncionariosUEP", inversedBy="acredtrabfunc")
     * @JoinColumn(name="FuncionarioUEP_id", referencedColumnName="id")
     * 
     */
    private $FuncionarioUEP;

    /**
     * @ManyToOne(targetEntity="RegistroPasesTrabajadores", inversedBy="acredtrabreg")
     * @JoinColumn(name="RegistroPasesTrabajador_id", referencedColumnName="id")
     * 
     */
    private $RegistroPasesTrabajador;

    /**
     * @ManyToOne(targetEntity="EstadoAcreditacion", inversedBy="estacredtrab")
     * @JoinColumn(name="EstadoAcreditacion_id", referencedColumnName="id")
     * 
     */
    private $EstadoAcreditacion;

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
     * @var string
     *
     * @ORM\Column(name="Comentario", type="string", length=255)
     */
    private $comentario;
	
    /**
     * @OneToMany(targetEntity="PasesTrabajadores", mappedBy="AcreditacionTrabajadores")
     * 
     */
    
    private $pasestrabacred;
	
    public function __construct(){
    	$this->pasestrabacred = new ArrayCollection();
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
     * @return AcreditacionTrabajadores
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
     * @return AcreditacionTrabajadores
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
     * Set comentario
     *
     * @param string $comentario
     * @return AcreditacionTrabajadores
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
     * Add pasestrabacred
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabacred
     * @return AcreditacionTrabajadores
     */
    public function addPasestrabacred(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabacred)
    {
        $this->pasestrabacred[] = $pasestrabacred;

        return $this;
    }

    /**
     * Remove pasestrabacred
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabacred
     */
    public function removePasestrabacred(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabacred)
    {
        $this->pasestrabacred->removeElement($pasestrabacred);
    }

    /**
     * Get pasestrabacred
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPasestrabacred()
    {
        return $this->pasestrabacred;
    }

    /**
     * Set FuncionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return AcreditacionTrabajadores
     */
    public function setFuncionarioUEP(\FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP = null)
    {
        $this->FuncionarioUEP = $funcionarioUEP;

        return $this;
    }

    /**
     * Get FuncionarioUEP
     *
     * @return \FirstEngineBundle\Entity\FuncionariosUEP 
     */
    public function getFuncionarioUEP()
    {
        return $this->FuncionarioUEP;
    }

    /**
     * Set RegistroPasesTrabajador
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesTrabajadores $registroPasesTrabajador
     * @return AcreditacionTrabajadores
     */
    public function setRegistroPasesTrabajador(\FirstEngineBundle\Entity\RegistroPasesTrabajadores $registroPasesTrabajador = null)
    {
        $this->RegistroPasesTrabajador = $registroPasesTrabajador;

        return $this;
    }

    /**
     * Get RegistroPasesTrabajador
     *
     * @return \FirstEngineBundle\Entity\RegistroPasesTrabajadores 
     */
    public function getRegistroPasesTrabajador()
    {
        return $this->RegistroPasesTrabajador;
    }

    /**
     * Set EstadoAcreditacion
     *
     * @param \FirstEngineBundle\Entity\EstadoAcreditacion $estadoAcreditacion
     * @return AcreditacionTrabajadores
     */
    public function setEstadoAcreditacion(\FirstEngineBundle\Entity\EstadoAcreditacion $estadoAcreditacion = null)
    {
        $this->EstadoAcreditacion = $estadoAcreditacion;

        return $this;
    }

    /**
     * Get EstadoAcreditacion
     *
     * @return \FirstEngineBundle\Entity\EstadoAcreditacion 
     */
    public function getEstadoAcreditacion()
    {
        return $this->EstadoAcreditacion;
    }
}
