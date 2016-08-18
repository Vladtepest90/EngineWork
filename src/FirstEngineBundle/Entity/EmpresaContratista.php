<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;

/**
 * EmpresaContratista
 *
 * @ORM\Table(name="empresa_contratista")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpresaContratistaRepository")
 */
class EmpresaContratista
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
     * @ORM\Column(name="Nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="Rut", type="string", length=9, unique=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoSII", type="string", length=20)
     */
    private $codigoSII;

    /**
     * @var string
     *
     * @ORM\Column(name="Rubro", type="string", length=250, nullable=true)
     */
    private $rubro;

    /**
     * @var string
     *
     * @ORM\Column(name="DireccionComercial", type="string", length=250)
     */
    private $direccionComercial;

    /**
     * @var int
     *
     * @ORM\Column(name="IdRepLegal", type="integer")
     */
    private $idRepLegal;

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
     * @ManyToMany(targetEntity="Usuarios", mappedBy="empresacontratista")
     */
    private $usuarios;
    public function __construct(){
    	$this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return EmpresaContratista
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return EmpresaContratista
     */
    public function setRut($rut)
    {
        $this->rut = $rut;

        return $this;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set codigoSII
     *
     * @param string $codigoSII
     * @return EmpresaContratista
     */
    public function setCodigoSII($codigoSII)
    {
        $this->codigoSII = $codigoSII;

        return $this;
    }

    /**
     * Get codigoSII
     *
     * @return string 
     */
    public function getCodigoSII()
    {
        return $this->codigoSII;
    }

    /**
     * Set rubro
     *
     * @param string $rubro
     * @return EmpresaContratista
     */
    public function setRubro($rubro)
    {
        $this->rubro = $rubro;

        return $this;
    }

    /**
     * Get rubro
     *
     * @return string 
     */
    public function getRubro()
    {
        return $this->rubro;
    }

    /**
     * Set direccionComercial
     *
     * @param string $direccionComercial
     * @return EmpresaContratista
     */
    public function setDireccionComercial($direccionComercial)
    {
        $this->direccionComercial = $direccionComercial;

        return $this;
    }

    /**
     * Get direccionComercial
     *
     * @return string 
     */
    public function getDireccionComercial()
    {
        return $this->direccionComercial;
    }

    /**
     * Set idRepLegal
     *
     * @param integer $idRepLegal
     * @return EmpresaContratista
     */
    public function setIdRepLegal($idRepLegal)
    {
        $this->idRepLegal = $idRepLegal;

        return $this;
    }

    /**
     * Get idRepLegal
     *
     * @return integer 
     */
    public function getIdRepLegal()
    {
        return $this->idRepLegal;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return EmpresaContratista
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
     * @return EmpresaContratista
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
     * Add usuarios
     *
     * @param \FirstEngineBundle\Entity\Usuarios $usuarios
     * @return EmpresaContratista
     */
    public function addUsuario(\FirstEngineBundle\Entity\Usuarios $usuarios)
    {
        $this->usuarios[] = $usuarios;

        return $this;
    }

    /**
     * Remove usuarios
     *
     * @param \FirstEngineBundle\Entity\Usuarios $usuarios
     */
    public function removeUsuario(\FirstEngineBundle\Entity\Usuarios $usuarios)
    {
        $this->usuarios->removeElement($usuarios);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
