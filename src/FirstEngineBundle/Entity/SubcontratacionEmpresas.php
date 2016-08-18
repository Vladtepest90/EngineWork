<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * SubcontratacionEmpresas
 *
 * @ORM\Table(name="subcontratacion_empresas")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\SubcontratacionEmpresasRepository")
 */
class SubcontratacionEmpresas
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
     * @ManyToOne(targetEntity="ServiciosContratados", inversedBy="subcontrataciones")
     * @JoinColumn(name="idServiciosContratados_id", referencedColumnName="id")
     */
    private $idServiciosContratados;

    /**
     * @var int
     *
     * @ORM\Column(name="IdEmpresaContratista", type="integer")
     */
    private $idEmpresaContratista;

    /**
     * @ManyToOne(targetEntity="CategoriaContratista", inversedBy="subcontrataciones")
     * @JoinColumn(name="idCategoria_id", referencedColumnName="id")
     */
    private $idCategoria;

    /**
     * @var int
     *
     * @ORM\Column(name="IdUsuarioContratista", type="integer")
     */
    private $idUsuarioContratista;

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
     * @OneToMany(targetEntity="DetalleContratoTrabajador", mappedBy="SubcontratacionEmpresas")
     * 
     */    
    private $detconttrabsub;
    
    /**
     * @OneToMany(targetEntity="Vehiculos", mappedBy="subcontratacion")
     * 
     */
    
    private $vehicsub;
    
    public function __construct(){
    	$this->detconttrabsub = new ArrayCollection();
    	$this->vehicsub = new ArrayCollection();
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
     * Set idServiciosContratados
     *
     * @param integer $idServiciosContratados
     * @return SubcontratacionEmpresas
     */
    public function setIdServiciosContratados($idServiciosContratados)
    {
        $this->idServiciosContratados = $idServiciosContratados;

        return $this;
    }

    /**
     * Get idServiciosContratados
     *
     * @return integer 
     */
    public function getIdServiciosContratados()
    {
        return $this->idServiciosContratados;
    }

    /**
     * Set idEmpresaContratista
     *
     * @param integer $idEmpresaContratista
     * @return SubcontratacionEmpresas
     */
    public function setIdEmpresaContratista($idEmpresaContratista)
    {
        $this->idEmpresaContratista = $idEmpresaContratista;

        return $this;
    }

    /**
     * Get idEmpresaContratista
     *
     * @return integer 
     */
    public function getIdEmpresaContratista()
    {
        return $this->idEmpresaContratista;
    }

    /**
     * Set idCategoria
     *
     * @param integer $idCategoria
     * @return SubcontratacionEmpresas
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

    /**
     * Get idCategoria
     *
     * @return integer 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set idUsuarioContratista
     *
     * @param integer $idUsuarioContratista
     * @return SubcontratacionEmpresas
     */
    public function setIdUsuarioContratista($idUsuarioContratista)
    {
        $this->idUsuarioContratista = $idUsuarioContratista;

        return $this;
    }

    /**
     * Get idUsuarioContratista
     *
     * @return integer 
     */
    public function getIdUsuarioContratista()
    {
        return $this->idUsuarioContratista;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return SubcontratacionEmpresas
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
     * @return SubcontratacionEmpresas
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
     * Add detconttrabsub
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabsub
     * @return SubcontratacionEmpresas
     */
    public function addDetconttrabsub(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabsub)
    {
        $this->detconttrabsub[] = $detconttrabsub;

        return $this;
    }

    /**
     * Remove detconttrabsub
     *
     * @param \FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabsub
     */
    public function removeDetconttrabsub(\FirstEngineBundle\Entity\DetalleContratoTrabajador $detconttrabsub)
    {
        $this->detconttrabsub->removeElement($detconttrabsub);
    }

    /**
     * Get detconttrabsub
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDetconttrabsub()
    {
        return $this->detconttrabsub;
    }

    /**
     * Add vehicsub
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $vehicsub
     * @return SubcontratacionEmpresas
     */
    public function addVehicsub(\FirstEngineBundle\Entity\Vehiculos $vehicsub)
    {
        $this->vehicsub[] = $vehicsub;

        return $this;
    }

    /**
     * Remove vehicsub
     *
     * @param \FirstEngineBundle\Entity\Vehiculos $vehicsub
     */
    public function removeVehicsub(\FirstEngineBundle\Entity\Vehiculos $vehicsub)
    {
        $this->vehicsub->removeElement($vehicsub);
    }

    /**
     * Get vehicsub
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVehicsub()
    {
        return $this->vehicsub;
    }
}
