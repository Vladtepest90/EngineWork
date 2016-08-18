<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoContratoTrabajador
 *
 * @ORM\Table(name="tipo_contrato_trabajador")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TipoContratoTrabajadorRepository")
 */
class TipoContratoTrabajador
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
     * @var string
     *
     * @ORM\Column(name="FechaIngreso", type="string", length=255)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="DetalleContratoTrabajador", mappedBy="TipoContrato")
     * 
     */
    
    private $detconttrabtip;
	
    public function __construct(){
    	
    	$this->detconttrabtip = new ArrayCollection();
    	
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
     * @return TipoContratoTrabajador
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
     * @param string $fechaIngreso
     * @return TipoContratoTrabajador
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return string 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaActualizar
     *
     * @param \DateTime $fechaActualizar
     * @return TipoContratoTrabajador
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
     * Add detconttrabtip
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabtip
     * @return TipoContratoTrabajador
     */
    public function addDetconttrabtip(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabtip)
    {
        $this->detconttrabtip[] = $detconttrabtip;

        return $this;
    }

    /**
     * Remove detconttrabtip
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabtip
     */
    public function removeDetconttrabtip(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabtip)
    {
        $this->detconttrabtip->removeElement($detconttrabtip);
    }

    /**
     * Get detconttrabtip
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetconttrabtip()
    {
        return $this->detconttrabtip;
    }
}
