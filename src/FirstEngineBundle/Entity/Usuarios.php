<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\ManyToMany;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\UsuariosRepository")
 * @HasLifecycleCallbacks()
 */


class Usuarios implements AdvancedUserInterface, \Serializable
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
     * @ORM\Column(name="Username", type="string", length=9, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var int
     *
     * @ORM\Column(name="Enable", type="smallint")
     */
    private $enable;

    /**
     * @var string
     *
     * @ORM\Column(name="CodigoActivacion", type="string", length=255)
     */
    private $codigoActivacion;
    
    /**
     * @var int
     *
     * @ORM\Column(name="Rol", type="integer")
     */
    private $rol;

    /**
     * @var int
     *
     * @ORM\Column(name="Perfil", type="integer")
     */
    private $perfil;

    /**
     * @var bool
     *
     * @ORM\Column(name="Status", type="boolean")
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaIngreso", type="datetime")
     * 
     */
    private $fechaIngreso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaActualizar", type="datetime")
     */
    private $fechaActualizar;

    /**
     * @OneToOne(targetEntity="Personas", inversedBy="usuario")
     */
    private $persona;
    
    /**
     * @ManyToMany(targetEntity="EmpresaPrincipal", inversedBy="usuarios")
     * @JoinTable(name="EmpPrincipalUsuarios")
     */  
    private $empresaprincipal;
    
    /**
     * @ManyToMany(targetEntity="EmpresaContratista", inversedBy="usuarios")
     * @JoinTable(name="EmpContratistaUsuarios")
     */
    private $empresacontratista;
    
    /**
     * @OneToMany(targetEntity="Funcionarios", mappedBy="Usuario")
     * 
     */
    
    private $funcusuario;
    
    public function __construct(){
    	$this->empresaprincipal = new \Doctrine\Common\Collections\ArrayCollection();
    	$this->empresacontratista= new \Doctrine\Common\Collections\ArrayCollection();
    	$this->funcusuario = new ArrayCollection();
    	$this->enable=1;
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
     * Set username
     *
     * @param string $username
     * @return Usuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set enable
     *
     * @param integer $enable
     * @return Usuarios
     */
    public function setEnable($enable)
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Get enable
     *
     * @return integer 
     */
    public function getEnable()
    {
        return $this->enable;
    }

    /**
     * Set codigoActivacion
     *
     * @param string $codigoActivacion
     * @return Usuarios
     */
    public function setCodigoActivacion($codigoActivacion)
    {
        $this->codigoActivacion = $codigoActivacion;

        return $this;
    }

    /**
     * Get codigoActivacion
     *
     * @return string 
     */
    public function getCodigoActivacion()
    {
        return $this->codigoActivacion;
    }

    /**
     * Set rol
     *
     * @param integer $rol
     * @return Usuarios
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return integer 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set perfil
     *
     * @param integer $perfil
     * @return Usuarios
     */
    public function setPerfil($perfil)
    {
        $this->perfil = $perfil;

        return $this;
    }

    /**
     * Get perfil
     *
     * @return integer 
     */
    public function getPerfil()
    {
        return $this->perfil;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Usuarios
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Usuarios
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
     * @return Usuarios
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
     * Set persona
     *
     * @param \FirstEngineBundle\Entity\Personas $persona
     * @return Usuarios
     */
    public function setPersona(\FirstEngineBundle\Entity\Personas $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \FirstEngineBundle\Entity\Personas 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add empresaprincipal
     *
     * @param \FirstEngineBundle\Entity\EmpresaPrincipal $empresaprincipal
     * @return Usuarios
     */
    public function addEmpresaprincipal(\FirstEngineBundle\Entity\EmpresaPrincipal $empresaprincipal)
    {
        $this->empresaprincipal[] = $empresaprincipal;

        return $this;
    }

    /**
     * Remove empresaprincipal
     *
     * @param \FirstEngineBundle\Entity\EmpresaPrincipal $empresaprincipal
     */
    public function removeEmpresaprincipal(\FirstEngineBundle\Entity\EmpresaPrincipal $empresaprincipal)
    {
        $this->empresaprincipal->removeElement($empresaprincipal);
    }

    /**
     * Get empresaprincipal
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresaprincipal()
    {
        return $this->empresaprincipal;
    }

    /**
     * Add empresacontratista
     *
     * @param \FirstEngineBundle\Entity\EmpresaContratista $empresacontratista
     * @return Usuarios
     */
    public function addEmpresacontratistum(\FirstEngineBundle\Entity\EmpresaContratista $empresacontratista)
    {
        $this->empresacontratista[] = $empresacontratista;

        return $this;
    }

    /**
     * Remove empresacontratista
     *
     * @param \FirstEngineBundle\Entity\EmpresaContratista $empresacontratista
     */
    public function removeEmpresacontratistum(\FirstEngineBundle\Entity\EmpresaContratista $empresacontratista)
    {
        $this->empresacontratista->removeElement($empresacontratista);
    }

    /**
     * Get empresacontratista
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmpresacontratista()
    {
        return $this->empresacontratista;
    }

    /**
     * Add funcusuario
     *
     * @param \FirstEngineBundle\Entity\Funcionarios $funcusuario
     * @return Usuarios
     */
    public function addFuncusuario(\FirstEngineBundle\Entity\Funcionarios $funcusuario)
    {
        $this->funcusuario[] = $funcusuario;

        return $this;
    }

    /**
     * Remove funcusuario
     *
     * @param \FirstEngineBundle\Entity\Funcionarios $funcusuario
     */
    public function removeFuncusuario(\FirstEngineBundle\Entity\Funcionarios $funcusuario)
    {
        $this->funcusuario->removeElement($funcusuario);
    }

    /**
     * Get funcusuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFuncusuario()
    {
        return $this->funcusuario;
    }
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
    	return serialize(array(
    			$this->id,
    			$this->username,
    			$this->password,
    			$this->enable
    	));
    }
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
    	list (
    			$this->id,
    			$this->username,
    			$this->password,
    			$this->enable
    			) = unserialize($serialized);
    }
	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonExpired()
	 */
	public function isAccountNonExpired() {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isAccountNonLocked()
	 */
	public function isAccountNonLocked() {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isCredentialsNonExpired()
	 */
	public function isCredentialsNonExpired() {
		// TODO: Auto-generated method stub

	}

	/**
	 * {@inheritDoc}
	 * @see \Symfony\Component\Security\Core\User\AdvancedUserInterface::isEnabled()
	 */
	public function isEnabled() {
		// TODO: Auto-generated method stub

	}

}
