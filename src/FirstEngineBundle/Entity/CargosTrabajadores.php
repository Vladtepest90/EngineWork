<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * CargosTrabajadores
 *
 * @ORM\Table(name="cargos_trabajadores")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\CargosTrabajadoresRepository")
 */
class CargosTrabajadores
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
     * @ORM\Column(name="Codigo", type="string", length=100)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=255)
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
     * @ORM\Column(name="FechaActualizar", type="datetime", nullable=true)
     */
    private $fechaActualizar;
    
    /**
     * @OneToMany(targetEntity="DetalleContratoTrabajador", mappedBy="CargoTrabajador")
     * 
     */
    
    private $detconttrabcarg;
    
    public function __construct(){
    	
    	$this->detconttrabcarg = new ArrayCollection();
    	
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
     * @return CargosTrabajadores
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
     * @return CargosTrabajadores
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
     * @return CargosTrabajadores
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
     * @return CargosTrabajadores
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
     * Add detconttrabcarg
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabcarg
     * @return CargosTrabajadores
     */
    public function addDetconttrabcarg(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabcarg)
    {
        $this->detconttrabcarg[] = $detconttrabcarg;

        return $this;
    }

    /**
     * Remove detconttrabcarg
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabcarg
     */
    public function removeDetconttrabcarg(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabcarg)
    {
        $this->detconttrabcarg->removeElement($detconttrabcarg);
    }

    /**
     * Get detconttrabcarg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetconttrabcarg()
    {
        return $this->detconttrabcarg;
    }
}
