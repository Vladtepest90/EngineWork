<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TurnosTrabajadores
 *
 * @ORM\Table(name="turnos_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TurnosTrabajadoresRepository")
 */
class TurnosTrabajadores
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
     * @ORM\Column(name="Descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="DiasTrabajo", type="smallint")
     */
    private $diasTrabajo;

    /**
     * @var int
     *
     * @ORM\Column(name="DiasDescanso", type="smallint")
     */
    private $diasDescanso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime")
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime")
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="DetalleContratoTrabajador", mappedBy="TurnoTrabajadores")
     * 
     */    
    private $detconttrabturn;
    
    public function __construct(){
    	
    	$this->detconttrabturn = new ArrayCollection();
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return TurnosTrabajadores
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
     * Set diasTrabajo
     *
     * @param integer $diasTrabajo
     * @return TurnosTrabajadores
     */
    public function setDiasTrabajo($diasTrabajo)
    {
        $this->diasTrabajo = $diasTrabajo;

        return $this;
    }

    /**
     * Get diasTrabajo
     *
     * @return integer 
     */
    public function getDiasTrabajo()
    {
        return $this->diasTrabajo;
    }

    /**
     * Set diasDescanso
     *
     * @param integer $diasDescanso
     * @return TurnosTrabajadores
     */
    public function setDiasDescanso($diasDescanso)
    {
        $this->diasDescanso = $diasDescanso;

        return $this;
    }

    /**
     * Get diasDescanso
     *
     * @return integer 
     */
    public function getDiasDescanso()
    {
        return $this->diasDescanso;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return TurnosTrabajadores
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
     * @return TurnosTrabajadores
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
     * Add detconttrabturn
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabturn
     * @return TurnosTrabajadores
     */
    public function addDetconttrabturn(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabturn)
    {
        $this->detconttrabturn[] = $detconttrabturn;

        return $this;
    }

    /**
     * Remove detconttrabturn
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabturn
     */
    public function removeDetconttrabturn(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabturn)
    {
        $this->detconttrabturn->removeElement($detconttrabturn);
    }

    /**
     * Get detconttrabturn
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetconttrabturn()
    {
        return $this->detconttrabturn;
    }
}
