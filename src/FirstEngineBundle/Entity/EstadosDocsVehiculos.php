<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * EstadosDocsVehiculos
 *
 * @ORM\Table(name="estados_docs_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EstadosDocsVehiculosRepository")
 */
class EstadosDocsVehiculos
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
     * @ManyToOne(targetEntity="FuncionariosUEP", inversedBy="estdocvehs")
     * @JoinColumn(name="FuncionarioUEP_id", referencedColumnName="id")
     * 
     */
    private $FuncionarioUEP;

    /**
     * @ManyToOne(targetEntity="RegistroDocsVehiculos", inversedBy="estdocveh")
     * @JoinColumn(name="RegistroDocsVehiculos_id", referencedColumnName="id")
     * 
     */
    private $RegistroDocsVehiculos;

    /**
     * @ManyToOne(targetEntity="TipoEstadoDocs", inversedBy="estdocsvehs")
     * @JoinColumn(name="TipoEstado_id", referencedColumnName="id")
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
     * @return EstadosDocsVehiculos
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
     * @return EstadosDocsVehiculos
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
     * @return EstadosDocsVehiculos
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
     * Set RegistroDocsVehiculos
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsVehiculos $registroDocsVehiculos
     * @return EstadosDocsVehiculos
     */
    public function setRegistroDocsVehiculos(\FirstEngineBundle\Entity\RegistroDocsVehiculos $registroDocsVehiculos = null)
    {
        $this->RegistroDocsVehiculos = $registroDocsVehiculos;

        return $this;
    }

    /**
     * Get RegistroDocsVehiculos
     *
     * @return \FirstEngineBundle\Entity\RegistroDocsVehiculos 
     */
    public function getRegistroDocsVehiculos()
    {
        return $this->RegistroDocsVehiculos;
    }

    /**
     * Set FuncionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return EstadosDocsVehiculos
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
     * Set TipoEstado
     *
     * @param \FirstEngineBundle\Entity\TipoEstadoDocs $tipoEstado
     * @return EstadosDocsVehiculos
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
}
