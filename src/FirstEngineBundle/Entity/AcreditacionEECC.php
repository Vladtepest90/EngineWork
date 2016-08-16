<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AcreditacionEECC
 *
 * @ORM\Table(name="acreditacion_e_e_c_c")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\AcreditacionEECCRepository")
 */
class AcreditacionEECC
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
     * @ORM\Column(name="IdFuncionarioUEP", type="integer")
     */
    private $idFuncionarioUEP;

    /**
     * @var int
     *
     * @ORM\Column(name="IdSubcontratacionEmpresas", type="integer")
     */
    private $idSubcontratacionEmpresas;

    /**
     * @var int
     *
     * @ORM\Column(name="IdServiciosContratados", type="integer")
     */
    private $idServiciosContratados;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEstadoAcreditacion", type="integer")
     */
    private $idEstadoAcreditacion;

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
     * @ORM\Column(name="Comentarios", type="string", length=255)
     */
    private $comentarios;


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
     * Set idFuncionarioUEP
     *
     * @param integer $idFuncionarioUEP
     * @return AcreditacionEECC
     */
    public function setIdFuncionarioUEP($idFuncionarioUEP)
    {
        $this->idFuncionarioUEP = $idFuncionarioUEP;

        return $this;
    }

    /**
     * Get idFuncionarioUEP
     *
     * @return integer 
     */
    public function getIdFuncionarioUEP()
    {
        return $this->idFuncionarioUEP;
    }

    /**
     * Set idSubcontratacionEmpresas
     *
     * @param integer $idSubcontratacionEmpresas
     * @return AcreditacionEECC
     */
    public function setIdSubcontratacionEmpresas($idSubcontratacionEmpresas)
    {
        $this->idSubcontratacionEmpresas = $idSubcontratacionEmpresas;

        return $this;
    }

    /**
     * Get idSubcontratacionEmpresas
     *
     * @return integer 
     */
    public function getIdSubcontratacionEmpresas()
    {
        return $this->idSubcontratacionEmpresas;
    }

    /**
     * Set idServiciosContratados
     *
     * @param integer $idServiciosContratados
     * @return AcreditacionEECC
     */
    public function setIdServiciosContratados($idServiciosContratados)
    {
        $this->idServiciosContratados = $idServiciosContratados;

        return $this;
    }

    /**
     * Get idServiciosContratados
     *
     * @return integer 
     */
    public function getIdServiciosContratados()
    {
        return $this->idServiciosContratados;
    }

    /**
     * Set idEstadoAcreditacion
     *
     * @param integer $idEstadoAcreditacion
     * @return AcreditacionEECC
     */
    public function setIdEstadoAcreditacion($idEstadoAcreditacion)
    {
        $this->idEstadoAcreditacion = $idEstadoAcreditacion;

        return $this;
    }

    /**
     * Get idEstadoAcreditacion
     *
     * @return integer 
     */
    public function getIdEstadoAcreditacion()
    {
        return $this->idEstadoAcreditacion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return AcreditacionEECC
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
     * @return AcreditacionEECC
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
     * Set comentarios
     *
     * @param string $comentarios
     * @return AcreditacionEECC
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
}
