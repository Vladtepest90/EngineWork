<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroContratos
 *
 * @ORM\Table(name="registro_contratos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroContratosRepository")
 */
class RegistroContratos
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
     * @ORM\Column(name="IdContrato", type="integer")
     */
    private $idContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaCreacion", type="datetime")
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaInicio", type="datetime")
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaTermino", type="datetime")
     */
    private $fechaTermino;

    /**
     * @var int
     *
     * @ORM\Column(name="Vencimiento", type="integer", nullable=true)
     */
    private $vencimiento;


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
     * Set idContrato
     *
     * @param integer $idContrato
     * @return RegistroContratos
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return RegistroContratos
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return RegistroContratos
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     * @return RegistroContratos
     */
    public function setFechaTermino($fechaTermino)
    {
        $this->fechaTermino = $fechaTermino;

        return $this;
    }

    /**
     * Get fechaTermino
     *
     * @return \DateTime 
     */
    public function getFechaTermino()
    {
        return $this->fechaTermino;
    }

    /**
     * Set vencimiento
     *
     * @param integer $vencimiento
     * @return RegistroContratos
     */
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento = $vencimiento;

        return $this;
    }

    /**
     * Get vencimiento
     *
     * @return integer 
     */
    public function getVencimiento()
    {
        return $this->vencimiento;
    }
}
