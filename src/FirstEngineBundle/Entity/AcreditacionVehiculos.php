<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

/**
 * AcreditacionVehiculos
 *
 * @ORM\Table(name="acreditacion_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\AcreditacionVehiculosRepository")
 * @HasLifecycleCallbacks()
 */
class AcreditacionVehiculos
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
     * @ManyToOne(targetEntity="FuncionariosUEP", inversedBy="acredvehsfunc")
     * @JoinColumn(name="FuncionarioUEP_id", referencedColumnName="id")
     * 
     */
    private $FuncionarioUEP;

    /**
     * @ManyToOne(targetEntity="RegistroPasesVehiculos", inversedBy="acredvehsreg")
     * @JoinColumn(name="RegistroPasesVehiculos", referencedColumnName="id")
     * 
     */
    private $RegistroPasesVehiculos;

    /**
     * @ManyToOne(targetEntity="EstadoAcreditacion", inversedBy="estacredvehs")
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
     * @return AcreditacionVehiculos
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
     * @return AcreditacionVehiculos
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
     * @ORM\PrePersist
     */
    public function setfechaIngreso()
    {
    	$this->fechaIngreso = new \DateTime();
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setfechaActualizar()
    {
    	$this->fechaActualizar = new \DateTime();
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     * @return AcreditacionVehiculos
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
     * Set FuncionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return AcreditacionVehiculos
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
     * Set RegistroPasesVehiculos
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesVehiculos $registroPasesVehiculos
     * @return AcreditacionVehiculos
     */
    public function setRegistroPasesVehiculos(\FirstEngineBundle\Entity\RegistroPasesVehiculos $registroPasesVehiculos = null)
    {
        $this->RegistroPasesVehiculos = $registroPasesVehiculos;

        return $this;
    }

    /**
     * Get RegistroPasesVehiculos
     *
     * @return \FirstEngineBundle\Entity\RegistroPasesVehiculos 
     */
    public function getRegistroPasesVehiculos()
    {
        return $this->RegistroPasesVehiculos;
    }

    /**
     * Set EstadoAcreditacion
     *
     * @param \FirstEngineBundle\Entity\EstadoAcreditacion $estadoAcreditacion
     * @return AcreditacionVehiculos
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
