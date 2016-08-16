<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CredencialVehiculos
 *
 * @ORM\Table(name="credencial_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\CredencialVehiculosRepository")
 */
class CredencialVehiculos
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
     * @ORM\Column(name="IdPasesVehiculos", type="integer")
     */
    private $idPasesVehiculos;

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
     * Set idPasesVehiculos
     *
     * @param integer $idPasesVehiculos
     * @return CredencialVehiculos
     */
    public function setIdPasesVehiculos($idPasesVehiculos)
    {
        $this->idPasesVehiculos = $idPasesVehiculos;

        return $this;
    }

    /**
     * Get idPasesVehiculos
     *
     * @return integer 
     */
    public function getIdPasesVehiculos()
    {
        return $this->idPasesVehiculos;
    }

    /**
     * Set fechaEmision
     *
     * @param \DateTime $fechaEmision
     * @return CredencialVehiculos
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
     * @return CredencialVehiculos
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
     * @return CredencialVehiculos
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
}
