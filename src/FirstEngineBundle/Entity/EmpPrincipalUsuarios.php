<?php

namespace FirstEngineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * EmpPrincipalUsuarios
 *
 * @ORM\Table(name="emp_principal_usuarios")
 * @ORM\Entity(repositoryClass="FirstEngineBundle\Repository\EmpPrincipalUsuariosRepository")
 */
class EmpPrincipalUsuarios
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
     * @ORM\Column(name="IdEmpresaPrincipal", type="integer")
     */
    private $idEmpresaPrincipal;

   /**
     * @var int
     *
     * @ORM\Column(name="IdUsuario", type="integer")
     */
    private $idUsuario;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idEmpresaPrincipal
     *
     * @param integer $idEmpresaPrincipal
     * @return EmpPrincipalUsuarios
     */
    public function setIdEmpresaPrincipal($idEmpresaPrincipal)
    {
        $this->idEmpresaPrincipal = $idEmpresaPrincipal;

        return $this;
    }

    /**
     * Get idEmpresaPrincipal
     *
     * @return integer 
     */
    public function getIdEmpresaPrincipal()
    {
        return $this->idEmpresaPrincipal;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     * @return EmpPrincipalUsuarios
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return EmpPrincipalUsuarios
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
     * @return EmpPrincipalUsuarios
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
