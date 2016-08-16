<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Funcionarios
 *
 * @ORM\Table(name="funcionarios")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\FuncionariosRepository")
 */
class Funcionarios
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
     * @ManyToOne(targetEntity="Usuarios", inversedBy="funcusuario")
     * @JoinColumn(name="Usuario_id", referencedColumnName="id")
     * 
     */
    private $Usuario;

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
     * @OneToMany(targetEntity="FuncionariosUEP", mappedBy="Funcionario")
     * 
     */
    
    private $funcionarioUEP;
    
    public function __construct(){
    	
    	$this->funcionarioUEP = new ArrayCollection();
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Funcionarios
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
     * @return Funcionarios
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
     * Set Usuario
     *
     * @param \FirstEngineBundle\Entity\Usuarios $usuario
     * @return Funcionarios
     */
    public function setUsuario(\FirstEngineBundle\Entity\Usuarios $usuario = null)
    {
        $this->Usuario = $usuario;

        return $this;
    }

    /**
     * Get Usuario
     *
     * @return \FirstEngineBundle\Entity\Usuarios 
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * Add funcionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     * @return Funcionarios
     */
    public function addFuncionarioUEP(\FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP)
    {
        $this->funcionarioUEP[] = $funcionarioUEP;

        return $this;
    }

    /**
     * Remove funcionarioUEP
     *
     * @param \FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP
     */
    public function removeFuncionarioUEP(\FirstEngineBundle\Entity\FuncionariosUEP $funcionarioUEP)
    {
        $this->funcionarioUEP->removeElement($funcionarioUEP);
    }

    /**
     * Get funcionarioUEP
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFuncionarioUEP()
    {
        return $this->funcionarioUEP;
    }
}
