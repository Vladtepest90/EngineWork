<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * EstadosDocsTrabajadores
 *
 * @ORM\Table(name="estados_docs_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EstadosDocsTrabajadoresRepository")
 */
class EstadosDocsTrabajadores
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
     * @ManyToOne(targetEntity="FuncionariosUEP", inversedBy="estdocstrab")
     * @JoinColumn(name="FuncionarioUEP_id", referencedColumnName="id")
     * 
     */
    private $FuncionarioUEP;

    /**
     * @ManyToOne(targetEntity="RegistroDocsTrabajador", inversedBy="estdoctrab")
     * @JoinColumn(name="RegistroDocsTrabajador_id", referencedColumnName="id")
     * 
     */
    private $RegistroDocsTrabajador;

    /**
     * @ManyToOne(targetEntity="TipoEstadoDocs", inversedBy="estdocstrabs")
     * @JoinColumn(name="TipoEstado_id",referencedColumnName="id")
     * 
     */
    private $TipoEstado;

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
     * @ORM\Column(name="Comentario", type="string", length=255, nullable=true)
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
     * @return EstadosDocsTrabajadores
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
     * @return EstadosDocsTrabajadores
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
     * @return EstadosDocsTrabajadores
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
     * Set TipoEstado
     *
     * @param \FirstEngineBundle\Entity\TipoEstadoDocs $tipoEstado
     * @return EstadosDocsTrabajadores
     */
    public function setTipoEstado(\FirstEngineBundle\Entity\TipoEstadoDocs $tipoEstado = null)
    {
        $this->TipoEstado = $tipoEstado;

        return $this;
    }

    /**
     * Get TipoEstado
     *
     * @return \FirstEngineBundle\Entity\TipoEstadoDocs 
     */
    public function getTipoEstado()
    {
        return $this->TipoEstado;
    }

    /**
     * Set FuncionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return EstadosDocsTrabajadores
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
     * Set RegistroDocsTrabajador
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsTrabajador $registroDocsTrabajador
     * @return EstadosDocsTrabajadores
     */
    public function setRegistroDocsTrabajador(\FirstEngineBundle\Entity\RegistroDocsTrabajador $registroDocsTrabajador = null)
    {
        $this->RegistroDocsTrabajador = $registroDocsTrabajador;

        return $this;
    }

    /**
     * Get RegistroDocsTrabajador
     *
     * @return \FirstEngineBundle\Entity\RegistroDocsTrabajador 
     */
    public function getRegistroDocsTrabajador()
    {
        return $this->RegistroDocsTrabajador;
    }
}
