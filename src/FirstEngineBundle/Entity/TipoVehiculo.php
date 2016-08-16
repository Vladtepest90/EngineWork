<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * TipoVehiculo
 *
 * @ORM\Table(name="tipo_vehiculo")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\TipoVehiculoRepository")
 */
class TipoVehiculo
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
     * @ORM\Column(name="Codigo", type="string", length=255)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=150)
     */
    private $descripcion;

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
     * @OneToMany(targetEntity="Vehiculos", mappedBy="tipoVehiculo")
     * 
     */
    
    private $vehiculo;
    
    public function __construct(){
    	
    	$this->vehiculo = new ArrayCollection();
    	
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
     * Set codigo
     *
     * @param string $codigo
     * @return TipoVehiculo
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
     * @return TipoVehiculo
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
     * @return TipoVehiculo
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
     * @return TipoVehiculo
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
     * Add vehiculo
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $vehiculo
     * @return TipoVehiculo
     */
    public function addVehiculo(\FirstEngineBundle\Entity\Vehiculos $vehiculo)
    {
        $this->vehiculo[] = $vehiculo;

        return $this;
    }

    /**
     * Remove vehiculo
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $vehiculo
     */
    public function removeVehiculo(\FirstEngineBundle\Entity\Vehiculos $vehiculo)
    {
        $this->vehiculo->removeElement($vehiculo);
    }

    /**
     * Get vehiculo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }
}
