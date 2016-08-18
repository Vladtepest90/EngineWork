<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Documentos
 *
 * @ORM\Table(name="documentos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\DocumentosRepository")
 */
class Documentos
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
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=255, nullable=true)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @ManyToOne(targetEntity="DocumentosEntidades", inversedBy="documento")
     * @JoinColumn(name="DocumentoEntidad_id",referencedColumnName="id")
     */
    private $DocumentoEntidad;

    /**
     * @ManyToOne(targetEntity="TipoPase", inversedBy="pase")
     * @JoinColumn(name="TipoPase_id",referencedColumnName="id")
     */
    private $TipoPase;


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
     * Set codigo
     *
     * @param string $codigo
     * @return Documentos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Documentos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Documentos
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
     * Set DocumentoEntidad
     *
     * @param integer $DocumentoEntidad
     * @return Documentos
     */
    public function setDocumentoEntidad($DocumentoEntidad)
    {
        $this->DocumentoEntidad = $DocumentoEntidad;

        return $this;
    }

    /**
     * Get DocumentoEntidad
     *
     * @return integer 
     */
    public function getDocumentoEntidad()
    {
        return $this->DocumentoEntidad;
    }

    /**
     * Set idTipoPase
     *
     * @param integer $idTipoPase
     * @return Documentos
     */
    public function setIdTipoPase($idTipoPase)
    {
        $this->idTipoPase = $idTipoPase;

        return $this;
    }

    /**
     * Get idTipoPase
     *
     * @return integer 
     */
    public function getIdTipoPase()
    {
        return $this->idTipoPase;
    }

    /**
     * Set TipoPase
     *
     * @param \FirstEngineBundle\Entity\TipoPase $tipoPase
     * @return Documentos
     */
    public function setTipoPase(\FirstEngineBundle\Entity\TipoPase $tipoPase = null)
    {
        $this->TipoPase = $tipoPase;

        return $this;
    }

    /**
     * Get TipoPase
     *
     * @return \FirstEngineBundle\Entity\TipoPase 
     */
    public function getTipoPase()
    {
        return $this->TipoPase;
    }
}
