<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * CredencialTrabajador
 *
 * @ORM\Table(name="credencial_trabajador")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\CredencialTrabajadorRepository")
 */
class CredencialTrabajador
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
     * @ManyToOne(targetEntity="PasesTrabajadores", inversedBy="credenciales")
     * @JoinColumn(name="PaseTrabajador_id",referencedColumnName="id")
     */
    private $PaseTrabajador;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaEmision", type="datetime")
     */
    private $fechaEmision;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencimiento", type="date")
     */
    private $fechaVencimiento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime")
     */
    private $fechaActualizar;


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
     * Set idPaseTrabajador
     *
     * @param integer $idPaseTrabajador
     * @return CredencialTrabajador
     */
    public function setIdPaseTrabajador($idPaseTrabajador)
    {
        $this->idPaseTrabajador = $idPaseTrabajador;

        return $this;
    }

    /**
     * Get idPaseTrabajador
     *
     * @return integer 
     */
    public function getIdPaseTrabajador()
    {
        return $this->idPaseTrabajador;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return CredencialTrabajador
     */
    public function setFechaEmision($fechaEmision)
    {
        $this->fechaEmision = $fechaEmision;

        return $this;
    }

    /**
     * Get fechaEmision
     *
     * @return \DateTime 
     */
    public function getFechaEmision()
    {
        return $this->fechaEmision;
    }

    /**
     * Set fechaVencimiento
     *
     * @param \DateTime $fechaVencimiento
     * @return CredencialTrabajador
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
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return CredencialTrabajador
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
     * Set PaseTrabajador
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $paseTrabajador
     * @return CredencialTrabajador
     */
    public function setPaseTrabajador(\FirstEngineBundle\Entity\PasesTrabajadores $paseTrabajador = null)
    {
        $this->PaseTrabajador = $paseTrabajador;

        return $this;
    }

    /**
     * Get PaseTrabajador
     *
     * @return \FirstEngineBundle\Entity\PasesTrabajadores 
     */
    public function getPaseTrabajador()
    {
        return $this->PaseTrabajador;
    }
}
