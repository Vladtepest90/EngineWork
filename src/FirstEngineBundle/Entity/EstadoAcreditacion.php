<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EstadoAcreditacion
 *
 * @ORM\Table(name="estado_acreditacion")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EstadoAcreditacionRepository")
 */
class EstadoAcreditacion
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
     * @OneToMany(targetEntity="PasesTrabajadores", mappedBy="EstadoAcreditacion")
     * 
     */   
    
    private $pasestrabstat;
    
    /**
     * @OneToMany(targetEntity="AcreditacionTrabajadores", mappedBy="EstadoAcreditacion")
     * 
     */
    
    private $estacredtrab;
    
    /**
     * @OneToMany(targetEntity="AcreditacionVehiculos", mappedBy="EstadoAcreditacion")
     * 
     */
    
    private $estacredvehs;

	public function __construct(){
		
		$this->pasestrabstat = new ArrayCollection();
		$this->estacredtrab = new ArrayCollection();
		$this->estacredvehs = new ArrayCollection();
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
     * @return EstadoAcreditacion
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
     * @return EstadoAcreditacion
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
     * @return EstadoAcreditacion
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
     * Add pasestrabstat
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabstat
     * @return EstadoAcreditacion
     */
    public function addPasestrabstat(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabstat)
    {
        $this->pasestrabstat[] = $pasestrabstat;

        return $this;
    }

    /**
     * Remove pasestrabstat
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabstat
     */
    public function removePasestrabstat(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabstat)
    {
        $this->pasestrabstat->removeElement($pasestrabstat);
    }

    /**
     * Get pasestrabstat
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPasestrabstat()
    {
        return $this->pasestrabstat;
    }

    /**
     * Add estacredtrab
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $estacredtrab
     * @return EstadoAcreditacion
     */
    public function addEstacredtrab(\FirstEngineBundle\Entity\AcreditacionTrabajadores $estacredtrab)
    {
        $this->estacredtrab[] = $estacredtrab;

        return $this;
    }

    /**
     * Remove estacredtrab
     *
     * @param \FirstEngineBundle\Entity\AcreditacionTrabajadores $estacredtrab
     */
    public function removeEstacredtrab(\FirstEngineBundle\Entity\AcreditacionTrabajadores $estacredtrab)
    {
        $this->estacredtrab->removeElement($estacredtrab);
    }

    /**
     * Get estacredtrab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstacredtrab()
    {
        return $this->estacredtrab;
    }

    /**
     * Add estacredvehs
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $estacredvehs
     * @return EstadoAcreditacion
     */
    public function addEstacredveh(\FirstEngineBundle\Entity\AcreditacionVehiculos $estacredvehs)
    {
        $this->estacredvehs[] = $estacredvehs;

        return $this;
    }

    /**
     * Remove estacredvehs
     *
     * @param \FirstEngineBundle\Entity\AcreditacionVehiculos $estacredvehs
     */
    public function removeEstacredveh(\FirstEngineBundle\Entity\AcreditacionVehiculos $estacredvehs)
    {
        $this->estacredvehs->removeElement($estacredvehs);
    }

    /**
     * Get estacredvehs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstacredvehs()
    {
        return $this->estacredvehs;
    }
}
