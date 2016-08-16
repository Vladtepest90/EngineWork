<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistroVehiculos
 *
 * @ORM\Table(name="registro_vehiculos")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\RegistroVehiculosRepository")
 */
class RegistroVehiculos
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
     * @ORM\Column(name="IdSubcontratacionEmpresa", type="integer")
     */
    private $idSubcontratacionEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="IdTipoVehiculo", type="integer")
     */
    private $idTipoVehiculo;

    /**
     * @var string
     *
     * @ORM\Column(name="Patente", type="string", length=10, unique=true)
     */
    private $patente;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="A�o", type="date")
     */
    private $a�o;

    /**
     * @var string
     *
     * @ORM\Column(name="Modelo", type="string", length=100)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Color", type="string", length=50, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroChasis", type="string", length=100, nullable=true, unique=true)
     */
    private $numeroChasis;

    /**
     * @var int
     *
     * @ORM\Column(name="Odometro", type="integer")
     */
    private $odometro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencPermisoCirc", type="date")
     */
    private $fechaVencPermisoCirc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencRevTecnica", type="date")
     */
    private $fechaVencRevTecnica;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaVencSOAP", type="date")
     */
    private $fechaVencSOAP;

    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=100)
     */
    private $marca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="date")
     */
    private $fechaIngreso;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="date")
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
     * Set idSubcontratacionEmpresa
     *
     * @param integer $idSubcontratacionEmpresa
     * @return RegistroVehiculos
     */
    public function setIdSubcontratacionEmpresa($idSubcontratacionEmpresa)
    {
        $this->idSubcontratacionEmpresa = $idSubcontratacionEmpresa;

        return $this;
    }

    /**
     * Get idSubcontratacionEmpresa
     *
     * @return integer 
     */
    public function getIdSubcontratacionEmpresa()
    {
        return $this->idSubcontratacionEmpresa;
    }

    /**
     * Set idTipoVehiculo
     *
     * @param integer $idTipoVehiculo
     * @return RegistroVehiculos
     */
    public function setIdTipoVehiculo($idTipoVehiculo)
    {
        $this->idTipoVehiculo = $idTipoVehiculo;

        return $this;
    }

    /**
     * Get idTipoVehiculo
     *
     * @return integer 
     */
    public function getIdTipoVehiculo()
    {
        return $this->idTipoVehiculo;
    }

    /**
     * Set patente
     *
     * @param string $patente
     * @return RegistroVehiculos
     */
    public function setPatente($patente)
    {
        $this->patente = $patente;

        return $this;
    }

    /**
     * Get patente
     *
     * @return string 
     */
    public function getPatente()
    {
        return $this->patente;
    }

    /**
     * Set a�o
     *
     * @param \DateTime $a�o
     * @return RegistroVehiculos
     */
    public function setA�o($a�o)
    {
        $this->a�o = $a�o;

        return $this;
    }

    /**
     * Get a�o
     *
     * @return \DateTime 
     */
    public function getA�o()
    {
        return $this->a�o;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return RegistroVehiculos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set color
     *
     * @param string $color
     * @return RegistroVehiculos
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set numeroChasis
     *
     * @param string $numeroChasis
     * @return RegistroVehiculos
     */
    public function setNumeroChasis($numeroChasis)
    {
        $this->numeroChasis = $numeroChasis;

        return $this;
    }

    /**
     * Get numeroChasis
     *
     * @return string 
     */
    public function getNumeroChasis()
    {
        return $this->numeroChasis;
    }

    /**
     * Set odometro
     *
     * @param integer $odometro
     * @return RegistroVehiculos
     */
    public function setOdometro($odometro)
    {
        $this->odometro = $odometro;

        return $this;
    }

    /**
     * Get odometro
     *
     * @return integer 
     */
    public function getOdometro()
    {
        return $this->odometro;
    }

    /**
     * Set fechaVencPermisoCirc
     *
     * @param \DateTime $fechaVencPermisoCirc
     * @return RegistroVehiculos
     */
    public function setFechaVencPermisoCirc($fechaVencPermisoCirc)
    {
        $this->fechaVencPermisoCirc = $fechaVencPermisoCirc;

        return $this;
    }

    /**
     * Get fechaVencPermisoCirc
     *
     * @return \DateTime 
     */
    public function getFechaVencPermisoCirc()
    {
        return $this->fechaVencPermisoCirc;
    }

    /**
     * Set fechaVencRevTecnica
     *
     * @param \DateTime $fechaVencRevTecnica
     * @return RegistroVehiculos
     */
    public function setFechaVencRevTecnica($fechaVencRevTecnica)
    {
        $this->fechaVencRevTecnica = $fechaVencRevTecnica;

        return $this;
    }

    /**
     * Get fechaVencRevTecnica
     *
     * @return \DateTime 
     */
    public function getFechaVencRevTecnica()
    {
        return $this->fechaVencRevTecnica;
    }

    /**
     * Set fechaVencSOAP
     *
     * @param \DateTime $fechaVencSOAP
     * @return RegistroVehiculos
     */
    public function setFechaVencSOAP($fechaVencSOAP)
    {
        $this->fechaVencSOAP = $fechaVencSOAP;

        return $this;
    }

    /**
     * Get fechaVencSOAP
     *
     * @return \DateTime 
     */
    public function getFechaVencSOAP()
    {
        return $this->fechaVencSOAP;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return RegistroVehiculos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return RegistroVehiculos
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
     * @return RegistroVehiculos
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
