<?php
namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Personas
 *
 * @ORM\Table(name="personas")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\PersonasRepository")
 *
 */
class Personas{

	
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
     * @ORM\Column(name="Nombres", type="string", length=100)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="Apellidos", type="string", length=100)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="Sexo", type="string", length=40)
     */
    private $sexo;

    /**
     * @var \Date
     *
     * @ORM\Column(name="FechaNacimiento", type="date")
     */
    private $fechaNacimiento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="Rut", type="string", length=9, unique=true)
     */
    private $rut;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=100)
     */
    private $email;

    /**
     * @var \Date
     *
     * @ORM\Column(name="FechaIngreso", type="date")
     */
    private $fechaIngreso;

    /**
     * @var \Date
     *
     * @ORM\Column(name="FechaActualizar", type="date")
     */
    private $fechaActualizar;

    
    /**
     * @OneToOne(targetEntity="Usuarios", mappedBy="persona")
     */
    private $usuario;
    
    
    /**
     * @OneToOne(targetEntity="Trabajadores", mappedBy="persona")
     */
    private $trabajador;
    

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
     * Set nombres
     *
     * @param string $nombres
     * @return Personas
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Personas
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Personas
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Personas
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set rut
     *
     * @param string $rut
     * @return Personas
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
     * Set email
     *
     * @param string $email
     * @return Personas
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Personas
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
     * @return Personas
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
     * Set usuario
     *
     * @param \FirstEngineBundle\Entity\Usuarios $usuario
     * @return Personas
     */
    public function setUsuario(\FirstEngineBundle\Entity\Usuarios $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \FirstEngineBundle\Entity\Usuarios 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set trabajador
     *
     * @param \FirstEngineBundle\Entity\Trabajadores $trabajador
     * @return Personas
     */
    public function setTrabajador(\FirstEngineBundle\Entity\Trabajadores $trabajador = null)
    {
        $this->trabajador = $trabajador;

        return $this;
    }

    /**
     * Get trabajador
     *
     * @return \FirstEngineBundle\Entity\Trabajadores 
     */
    public function getTrabajador()
    {
        return $this->trabajador;
    }
}
