<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EmpresaPrincipal
 *
 * @ORM\Table(name="empresa_principal")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpresaPrincipalRepository")
 */
class EmpresaPrincipal
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
     * @ORM\Column(name="Nombre", type="string", length=200)
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
     * @ORM\Column(name="CodigoSII", type="string", length=20, nullable=true)
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
     * @ManyToMany(targetEntity="Usuarios", mappedBy="empresaprincipal")
     */
    private $usuarios;
        
    /**
     *@OneToMany(targetEntity="Areas", mappedBy="idEmpresaPrincipal")
     */
    private $areas;

    /**
     *@OneToMany(targetEntity="Contratos", mappedBy="idEmpresaPrincipal")
     */
    private $contratos;
    
    /**
     * @OneToMany(targetEntity="EmpPrincipalInd", mappedBy="EmpresaPrincipal")
     * 
     */
    
    private $inducciones;
    
    /**
     * @OneToMany(targetEntity="EmpPrincipalIns",mappedBy="EmpresaPrincipal")
     * 
     * 
     */
    
    private $empprinrev;
    
    public function __construct(){
    	$this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    	$this->areas = new ArrayCollection();
    	$this->contratos = new ArrayCollection();
    	$this->inducciones = new ArrayCollection();
    	$this->empprinrev = new ArrayCollection();
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @return EmpresaPrincipal
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
     * @ORM\PrePersist
     */
    public function setfechaIngreso()
    {
    	$this->fechaIngreso = new \DateTime();
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setfechaActualizar()
    {
    	$this->fechaActualizar = new \DateTime();
    }

    /**
     * Add usuarios
     *
     * @param \FirstEngineBundle\Entity\Usuarios $usuarios
     * @return EmpresaPrincipal
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

    /**
     * Add areas
     *
     * @param \FirstEngineBundle\Entity\Areas $areas
     * @return EmpresaPrincipal
     */
    public function addArea(\FirstEngineBundle\Entity\Areas $areas)
    {
        $this->areas[] = $areas;

        return $this;
    }

    /**
     * Remove areas
     *
     * @param \FirstEngineBundle\Entity\Areas $areas
     */
    public function removeArea(\FirstEngineBundle\Entity\Areas $areas)
    {
        $this->areas->removeElement($areas);
    }

    /**
     * Get areas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Add contratos
     *
     * @param \FirstEngineBundle\Entity\Areas $contratos
     * @return EmpresaPrincipal
     */
    public function addContrato(\FirstEngineBundle\Entity\Areas $contratos)
    {
        $this->contratos[] = $contratos;

        return $this;
    }

    /**
     * Remove contratos
     *
     * @param \FirstEngineBundle\Entity\Areas $contratos
     */
    public function removeContrato(\FirstEngineBundle\Entity\Areas $contratos)
    {
        $this->contratos->removeElement($contratos);
    }

    /**
     * Get contratos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContratos()
    {
        return $this->contratos;
    }

    /**
     * Add inducciones
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalInd $inducciones
     * @return EmpresaPrincipal
     */
    public function addInduccione(\FirstEngineBundle\Entity\EmpPrincipalInd $inducciones)
    {
        $this->inducciones[] = $inducciones;

        return $this;
    }

    /**
     * Remove inducciones
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalInd $inducciones
     */
    public function removeInduccione(\FirstEngineBundle\Entity\EmpPrincipalInd $inducciones)
    {
        $this->inducciones->removeElement($inducciones);
    }

    /**
     * Get inducciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInducciones()
    {
        return $this->inducciones;
    }

    /**
     * Add empprinrev
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalIns $empprinrev
     * @return EmpresaPrincipal
     */
    public function addEmpprinrev(\FirstEngineBundle\Entity\EmpPrincipalIns $empprinrev)
    {
        $this->empprinrev[] = $empprinrev;

        return $this;
    }

    /**
     * Remove empprinrev
     *
     * @param \FirstEngineBundle\Entity\EmpPrincipalIns $empprinrev
     */
    public function removeEmpprinrev(\FirstEngineBundle\Entity\EmpPrincipalIns $empprinrev)
    {
        $this->empprinrev->removeElement($empprinrev);
    }

    /**
     * Get empprinrev
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpprinrev()
    {
        return $this->empprinrev;
    }
}
