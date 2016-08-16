<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * PasesTrabajadores
 *
 * @ORM\Table(name="pases_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\PasesTrabajadoresRepository")
 */
class PasesTrabajadores
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
     * @ManyToOne(targetEntity="FuncionariosUEP", inversedBy="pasestrabajador")
     * @JoinColumn(name="FuncionarioUEP_id", referencedColumnName="id")
     * 
     */
    private $FuncionarioUEP;

    /**
     * @ManyToOne(targetEntity="DetalleContratoTrabajador", inversedBy="pasestrabdet")
     * @JoinColumn(name="DetalleContratoTrabajador_id", referencedColumnName="id")
     * 
     */
    private $DetalleContratoTrabajador;

    /**
     * @ManyToOne(targetEntity="AcreditacionTrabajadores", inversedBy="pasestrabacred")
     * @JoinColumn(name="AcreditacionTrabajadores_id", referencedColumnName="id")
     * 
     */
    private $AcreditacionTrabajadores;

    /**
     * @ManyToOne(targetEntity="ServiciosContratados", inversedBy="pasestrabserv")
     * @JoinColumn(name="ServiciosContratados_id", referencedColumnName="id")
     * 
     */
    private $ServiciosContratados;

    /**
     * @ManyToOne(targetEntity="EstadoAcreditacion", inversedBy="pasestrabstat")
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
     * @ORM\Column(name="FechaActualizar", type="date")
     */
    private $fechaActualizar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencimiento", type="date")
     */
    private $fechaVencimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Comentarios", type="string", length=255)
     */
    private $comentarios;
	
    /**
     * @OneToMany(targetEntity="CredencialTrabajador", mappedBy="PaseTrabajador")
     * 
     */
    
    
    private $credenciales;
	
    public function __construct(){
    	$this->credenciales = new ArrayCollection();
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
     * @return PasesTrabajadores
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
     * @return PasesTrabajadores
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
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return PasesTrabajadores
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
     * Set comentarios
     *
     * @param string $comentarios
     * @return PasesTrabajadores
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;

        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Add credenciales
     *
     * @param \FirstEngineBundle\Entity\CredencialTrabajador $credenciales
     * @return PasesTrabajadores
     */
    public function addCredenciale(\FirstEngineBundle\Entity\CredencialTrabajador $credenciales)
    {
        $this->credenciales[] = $credenciales;

        return $this;
    }

    /**
     * Remove credenciales
     *
     * @param \FirstEngineBundle\Entity\CredencialTrabajador $credenciales
     */
    public function removeCredenciale(\FirstEngineBundle\Entity\CredencialTrabajador $credenciales)
    {
        $this->credenciales->removeElement($credenciales);
    }

    /**
     * Get credenciales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCredenciales()
    {
        return $this->credenciales;
    }


    /**
     * Set FuncionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return PasesTrabajadores
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
     * Set DetalleContratoTrabajador
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detalleContratoTrabajador
     * @return PasesTrabajadores
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
     * Set EstadoAcreditacion
     *
     * @param \FirstEngineBundle\Entity\EstadoAcreditacion $estadoAcreditacion
     * @return PasesTrabajadores
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

    /**
     * Set AcreditacionTrabajadores
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $acreditacionTrabajadores
     * @return PasesTrabajadores
     */
    public function setAcreditacionTrabajadores(\FirstEngineBundle\Entity\AcreditacionTrabajadores $acreditacionTrabajadores = null)
    {
        $this->AcreditacionTrabajadores = $acreditacionTrabajadores;

        return $this;
    }

    /**
     * Get AcreditacionTrabajadores
     *
     * @return \FirstEngineBundle\Entity\AcreditacionTrabajadores 
     */
    public function getAcreditacionTrabajadores()
    {
        return $this->AcreditacionTrabajadores;
    }

    /**
     * Set ServiciosContratados
     *
     * @param \FirstEngineBundle\Entity\ServiciosContratados $serviciosContratados
     * @return PasesTrabajadores
     */
    public function setServiciosContratados(\FirstEngineBundle\Entity\ServiciosContratados $serviciosContratados = null)
    {
        $this->ServiciosContratados = $serviciosContratados;

        return $this;
    }

    /**
     * Get ServiciosContratados
     *
     * @return \FirstEngineBundle\Entity\ServiciosContratados 
     */
    public function getServiciosContratados()
    {
        return $this->ServiciosContratados;
    }
}
