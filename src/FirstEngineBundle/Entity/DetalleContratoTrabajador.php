<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * DetalleContratoTrabajador
 *
 * @ORM\Table(name="detalle_contrato_trabajador")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\DetalleContratoTrabajadorRepository")
 */
class DetalleContratoTrabajador
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
     * @ManyToOne(targetEntity="SubcontratacionEmpresas", inversedBy="detconttrabsub")
     * @JoinColumn(name="SubcontratacionEmpresas_id", referencedColumnName="id")
     * 
     */
    private $SubcontratacionEmpresas;

    /**
     * @ManyToOne(targetEntity="TurnosTrabajadores", inversedBy="detconttrabturn")
     * @JoinColumn(name="TurnoTrabajadores_id", referencedColumnName="id")
     * 
     */
    private $TurnoTrabajadores;

    /**
     * @ManyToOne(targetEntity="CargosTrabajadores", inversedBy="detconttrabcarg")
     * @JoinColumn(name="CargoTrabajador_id", referencedColumnName="id")
     * 
     */
    private $CargoTrabajador;

    /**
     * @ManyToOne(targetEntity="Trabajadores", inversedBy="detcontrabtrab")
     * @JoinColumn(name="Trabajador_id", referencedColumnName="id")
     * 
     */
    private $Trabajador;

    /**
     * @ManyToOne(targetEntity="TipoContratoTrabajador", inversedBy="detconttrabtip")
     * @JoinColumn(name="TipoContrato_id", referencedColumnName="id")
     * 
     */
    private $TipoContrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaContratacion", type="date")
     */
    private $fechaContratacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaTermino", type="date", nullable=true)
     */
    private $fechaTermino;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="date", nullable=true)
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="date", nullable=true)
     */
    private $fechaActualizar;
    
	/**
	 * @OneToMany(targetEntity="RegistroDocsTrabajador",mappedBy="detconttrab") 
	 * 
	 */
    
    private $regdocstrab;
    
    /**
     * @OneToMany(targetEntity="PasesTrabajadores", mappedBy="DetalleContratoTrabajador")
     * 
     */
    
    private $pasestrabdet;
    
    /**
     * @OneToMany(targetEntity="RegistroPasesTrabajadores", mappedBy="DetalleContratoTrabajador")
     * 
     */
    
    private $regpasestrabdet;
    
    public function __construct(){
    	
    	$this->regdocstrab = new ArrayCollection();
    	$this->pasestrabdet = new ArrayCollection();
    	$this->regpasestrabdet = new ArrayCollection();
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
     * Set fechaContratacion
     *
     * @param \DateTime $fechaContratacion
     * @return DetalleContratoTrabajador
     */
    public function setFechaContratacion($fechaContratacion)
    {
        $this->fechaContratacion = $fechaContratacion;

        return $this;
    }

    /**
     * Get fechaContratacion
     *
     * @return \DateTime 
     */
    public function getFechaContratacion()
    {
        return $this->fechaContratacion;
    }

    /**
     * Set fechaTermino
     *
     * @param \DateTime $fechaTermino
     * @return DetalleContratoTrabajador
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return DetalleContratoTrabajador
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
     * @return DetalleContratoTrabajador
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
     * Add regdocstrab
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab
     * @return DetalleContratoTrabajador
     */
    public function addRegdocstrab(\FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab)
    {
        $this->regdocstrab[] = $regdocstrab;

        return $this;
    }

    /**
     * Remove regdocstrab
     *
     * @param \FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab
     */
    public function removeRegdocstrab(\FirstEngineBundle\Entity\RegistroDocsTrabajador $regdocstrab)
    {
        $this->regdocstrab->removeElement($regdocstrab);
    }

    /**
     * Get regdocstrab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegdocstrab()
    {
        return $this->regdocstrab;
    }

    /**
     * Add pasestrabdet
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabdet
     * @return DetalleContratoTrabajador
     */
    public function addPasestrabdet(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabdet)
    {
        $this->pasestrabdet[] = $pasestrabdet;

        return $this;
    }

    /**
     * Remove pasestrabdet
     *
     * @param \FirstEngineBundle\Entity\PasesTrabajadores $pasestrabdet
     */
    public function removePasestrabdet(\FirstEngineBundle\Entity\PasesTrabajadores $pasestrabdet)
    {
        $this->pasestrabdet->removeElement($pasestrabdet);
    }

    /**
     * Get pasestrabdet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPasestrabdet()
    {
        return $this->pasestrabdet;
    }

    /**
     * Add regpasestrabdet
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabdet
     * @return DetalleContratoTrabajador
     */
    public function addRegpasestrabdet(\FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabdet)
    {
        $this->regpasestrabdet[] = $regpasestrabdet;

        return $this;
    }

    /**
     * Remove regpasestrabdet
     *
     * @param \FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabdet
     */
    public function removeRegpasestrabdet(\FirstEngineBundle\Entity\RegistroPasesTrabajadores $regpasestrabdet)
    {
        $this->regpasestrabdet->removeElement($regpasestrabdet);
    }

    /**
     * Get regpasestrabdet
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRegpasestrabdet()
    {
        return $this->regpasestrabdet;
    }

    /**
     * Set SubcontratacionEmpresas
     *
     * @param \FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontratacionEmpresas
     * @return DetalleContratoTrabajador
     */
    public function setSubcontratacionEmpresas(\FirstEngineBundle\Entity\SubcontratacionEmpresas $subcontratacionEmpresas = null)
    {
        $this->SubcontratacionEmpresas = $subcontratacionEmpresas;

        return $this;
    }

    /**
     * Get SubcontratacionEmpresas
     *
     * @return \FirstEngineBundle\Entity\SubcontratacionEmpresas 
     */
    public function getSubcontratacionEmpresas()
    {
        return $this->SubcontratacionEmpresas;
    }

    /**
     * Set TurnoTrabajadores
     *
     * @param \FirstEngineBundle\Entity\TurnosTrabajadores $turnoTrabajadores
     * @return DetalleContratoTrabajador
     */
    public function setTurnoTrabajadores(\FirstEngineBundle\Entity\TurnosTrabajadores $turnoTrabajadores = null)
    {
        $this->TurnoTrabajadores = $turnoTrabajadores;

        return $this;
    }

    /**
     * Get TurnoTrabajadores
     *
     * @return \FirstEngineBundle\Entity\TurnosTrabajadores 
     */
    public function getTurnoTrabajadores()
    {
        return $this->TurnoTrabajadores;
    }

    /**
     * Set CargoTrabajador
     *
     * @param \FirstEngineBundle\Entity\CargosTrabajadores $cargoTrabajador
     * @return DetalleContratoTrabajador
     */
    public function setCargoTrabajador(\FirstEngineBundle\Entity\CargosTrabajadores $cargoTrabajador = null)
    {
        $this->CargoTrabajador = $cargoTrabajador;

        return $this;
    }

    /**
     * Get CargoTrabajador
     *
     * @return \FirstEngineBundle\Entity\CargosTrabajadores 
     */
    public function getCargoTrabajador()
    {
        return $this->CargoTrabajador;
    }

    /**
     * Set TipoContrato
     *
     * @param \FirstEngineBundle\Entity\TipoContratoTrabajador $tipoContrato
     * @return DetalleContratoTrabajador
     */
    public function setTipoContrato(\FirstEngineBundle\Entity\TipoContratoTrabajador $tipoContrato = null)
    {
        $this->TipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get TipoContrato
     *
     * @return \FirstEngineBundle\Entity\TipoContratoTrabajador 
     */
    public function getTipoContrato()
    {
        return $this->TipoContrato;
    }

    /**
     * Set Trabajador
     *
     * @param \FirstEngineBundle\Entity\Trabajadores $trabajador
     * @return DetalleContratoTrabajador
     */
    public function setTrabajador(\FirstEngineBundle\Entity\Trabajadores $trabajador = null)
    {
        $this->Trabajador = $trabajador;

        return $this;
    }

    /**
     * Get Trabajador
     *
     * @return \FirstEngineBundle\Entity\Trabajadores 
     */
    public function getTrabajador()
    {
        return $this->Trabajador;
    }
}
